<?php

class Connection
{
	public function connect($database, $username, $password, $host = 'localhost')
	{
		throw new RuntimeException('Anda harus mengimplement asikan method connect() sesuai dengan database driver yang A nda gunakan.');
	}
}

class MySQLConnection extends Connection
{
	public function connect($database, $username, $password, $host = 'localhost')
	{
        echo "berhasil kepanggil";
	/**
    • Ceritanya ini logic koneksi ke database MySQL
	*
    • Anda tidak bisa menggunakan _keyword_ `parent` un tuk memanggil _method_ `connect()` milik _parent class_
    • karena akan mengakibatkan error.
    **/
	}
}

class PostgreSQLConnection extends Connection
{
	public function connect($database, $username, $password, $host = 'localhost')
	{
		/**
	    • Ceritanya ini logic koneksi ke database PostgreSQL
		*
	    • Anda tidak bisa menggunakan _keyword_ `parent` un tuk memanggil _method_ `connect()` milik _parent class_
	    • karena akan mengakibatkan error.
	    **/
	}
}

$mySql = new MySQLConnection("123","123",'123');
$mySql->connect("admin","123","1");

$postGre = new PostgreSQLConnection("123","123",'123');
$postGre->connect("admin","123","1");