<?php
	
	/*
	$db_username='root';
	$db_password='';
	$db_name='sos.doc';
	$db_host='localhost';

	$db= new mysqli($db_host,$db_username,$db_password,$db_name) or die('0');
	*/

	$mail=$_POST['mail'];
	$comment=$_POST['comment'];
	
	/*$url="comment.xml";
	$xml=simplexml_load_file($url)->saveXML();


	
	$dom = new DOMDocument();
	$dom->loadXML($xml);

	//echo $xml;



	$root=$dom->comments;*/

	$dom= new DOMDocument();
	$url="comment.xml";
	$dom->load($url);

	$comments_node=$dom->getElementsByTagName('comments');
	$comment_node=$dom->createElement('comment');
	$mail_node=$dom->createElement('mail');
	$mail_txt_node=$dom->createTextNode($mail);
	$content_node=$dom->createElement('content');
	$content_txt_node=$dom->createTextNode($comment);

	$mail_node->appendChild($mail_txt_node);
	$content_node->appendChild($content_txt_node);
	$comment_node->appendChild($mail_node);
	$comment_node->appendChild($content_node);
	$comments_node[0]->appendChild($comment_node);



	$dom->save('comment.xml');


ECHO 1;


?>
