//var rooms = [];
module.exports.getUserFeeds = function (chatpage, socket, io, pool,async)
{
	socket.on('senddata', function (data)
    {
		socket.user_id = data.user_id;
		console.log(data.user_id);
		pool.getConnection(function (err, connection)
		{
			 async.parallel([
				function(callback)
				{
					connection.query("select pesan.id_from as idfrom, pesan.id_to as idto ,pengguna.nama as nama ,pengguna.url as url, count(pesan.id_from) as banyak, pesan.timestamp as waktu from pesan join pengguna on pesan.id_to = '" + data.user_id+"' and pesan.status = 0 and pengguna.id = pesan.id_from group by pesan.id_from", function (error1, userdata)
					{
						 if (error1) return callback(error1);
						 callback(null, userdata);
					});
				},
				function (callback)
				{
					if(data.user_id)
					connection.query("SELECT nama,url from pengguna where id in(SELECT distinct(id_from) FROM pesan where id_to = '" + data.user_id +"')", function (error3, listorang)
					{
						if (error3) return callback(error3);
						callback(null, listorang);
					});
					else
						callback(null,null);
				},
				function(callback)
				{
					if(data.user_id)
					connection.query("SELECT count(id) AS jumlah from pesan where status = 0 and id_to = '"+data.user_id+"'",function(error4,count){
						if (error4) return callback(error4);
						callback(null, count);
					});
					else
						callback(null,null);
				}
			 ], function (err, results)
				{
					if(err) throw err;
					socket.emit('listorang',
					{
						userdata:results[0],
						listorang:results[1],
						count:results[2]
					});
					connection.release();
				});
		});
	});
	socket.on('slist', function (data)
	{
		pool.getConnection(function (err, connection)
		{
			 async.parallel([
				function(callback)
				{
					connection.query("SELECT id_from,isi,timestamp FROM  pesan WHERE (id_from='"+data.idfrom+"' AND id_to='"+data.idto+"') OR (id_from='"+data.idto+"' AND id_to='"+data.idfrom+"') order by timestamp ASC", function (error1, listpesan)
					{
						 if (error1) return callback(error1);
						 callback(null, listpesan);
					});
				},
				function(callback)
				{
					connection.query("SELECT id,nama,url FROM  pengguna WHERE id = '"+data.idfrom+"' OR id = '"+data.idto+"'", function (error2, daftarorang)
					{
						 if (error2) return callback(error2);
						 callback(null, daftarorang);
					});
				}
			 ], function (err, results)
				{
					if(err) throw err;
					socket.emit('getlist',
					{
						listpesan:results[0],
						daftarorang:results[1]
					});
					//socket.broadcast.to('room'+ data.room_id +'').emit('newuser', {userdata:results[0]});
					connection.release();
				});
		});
	});
	socket.on('sendpesan', function (data)
	{
		pool.getConnection(function (err, connection)
        {
			connection.query("INSERT INTO pesan (id_from,id_to,isi) VALUES ('"+ data.idfrom + "','" + data.idto + "','" + data.msg + "')", function (err, result)
            {
				if (err) throw err;
				async.parallel([
					function (callback)
					{
						connection.query("SELECT pengguna.url as url, pengguna.nama as nama,pesan.id as idpesan ,pesan.id_from as idfrom, pesan.id_to as idto, pesan.isi as isi, pesan.timestamp as waktu from pesan join pengguna on pengguna.id = pesan.id_from and pesan.id='" + result.insertId + "'", function (err2, pesan)
						{
							if (err2) return callback(err2);
							callback(null, pesan);
						});
					},
					function (callback)
                    {
                        connection.query("select pesan.id_from as idfrom, pengguna.nama as nama ,pengguna.url as url, count(pesan.id_from) as banyak, pesan.timestamp as waktu from pesan join pengguna on pesan.id_to = '" + data.idto+"' and pesan.status = 0 and pengguna.id = pesan.id_from group by pesan.id_from", function (err3, userdata)
                        {
                            if (err3) return callback(err3);
                            callback(null, userdata);
                        });
                    },
					], function (err, results)
					{
						if (err) throw err;
						if (results[0])
						{
							chatpage.emit('showpesan',
                            {
								pesan: results[0],
                                userdata: results[1],
								idto: data.idto,
								idfrom: data.idfrom
                            });
						}
						connection.release();
					});	
			});
		});
	});
	
	socket.on('update', function (data)
	{
		pool.getConnection(function (err, connection)
        {
			connection.query("UPDATE pesan set status = 1 where id= "+data.idpesan , function (err, result)
            {
				if (err) throw err;
				connection.release();
			});
		});
	});
	
	socket.on('disconnect', function ()
    {
        console.log("user disconnected");
		/*pool.getConnection(function (err, connection)
        {
			connection.query('DELETE from users where user_id='+socket.user_id+'', function (err, removeuser)
			{
				if (err) throw err;
			});
			connection.query('DELETE from comments where user_id='+socket.user_id+'', function (err, removecomments)
			{
				if (err) throw err;
			});
			connection.release();
		});*/
		//socket.broadcast.to('room'+ socket.room_id +'').emit('removeuser', {user_id:socket.user_id});
       // socket.leave(socket.room);
    });
	
};