<?php



function con(){
	return new mysqli("localhost","root","","multi_upload");
}

function insert_img($folder, $image){
	$con = con();
	$con->query("insert into image (folder,src,created_at,estado) value (\"$folder\",\"$image\",NOW(),0)");
}

function get_imgs(){
	$images = array();
	$con = con();
	$query=$con->query("select * from image order by created_at desc");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}

function get_img($id){
	$image = null;
	$con = con();
	$query=$con->query("select * from image where id=$id");
	while($r=$query->fetch_object()){
		$image = $r;
	}
	return $image;
}

function del($id){
	$con = con();
	$con->query("delete from image where id=$id");
}

function get_imgs_rfc(){
	$images = array();
	$con = con();
	$query=$con->query("select * from image");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}

function get_imgs_porid(){
	$images = array();
	$con = con();
	$query=$con->query("select * from image order by id desc");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}
function get_imgs_pornombre(){
	$images = array();
	$con = con();
	$query=$con->query("select * from image order by src");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}

function get_imgs_porfecha(){
	$images = array();
	$con = con();
	$query=$con->query("select * from image order by created_at");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}

function get_imgs_porestado(){
	$images = array();
	$con = con();
	$query=$con->query("select * from image order by estado desc");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}
function search_imgs($search){
    $images = array();
    $con = con();
    $query=$con->query('select * from image where src like "%'.$search.'%"');
    while($r=$query->fetch_object()){
        $images[] = $r;
    }
    return $images;
}
?>