<?php

class CP_Send_message {

	public function __construct() {

		add_action( 'wp_ajax_nopriv_msb_send_message', array($this, 'sendMessage') );
		add_action( 'wp_ajax_msb_send_message', array($this, 'sendMessage') );

		
		$this->init();
	}

	function init() {
	}

	function sendMessage() {
		$errors = array();

		// name
		$name = sanitize_text_field($_POST['name']);
		if (empty($name)) {
			$errors['name'] = 'Please write Your name';
		}
		
		// email
		$email = sanitize_text_field($_POST['email']);
		if (empty($email)) {
			$errors['email'] = 'Please write Your e-mail';
		}
	
		// message
		$message = sanitize_text_field($_POST['message']);
		if (empty($message)) {
			$errors['message'] = 'Please write Your message';
		}
	
		//$odbior = sanitize_text_field($_POST['odbior']);
	
		// if there are errors
		if (count($errors)) {
			$response = array(
				'alert' => array(
					'type' => 'error',
					'title' => 'Błąd',
					'message' => 'Wypełnij wszystkie pola.',
					'container' => '.contact form'
				),
				'errors' => $errors
			);
		}

		
		else {

			$post = array(
			  'post_status'           => 'draft', 
			  'post_type'             => 'messages',
			  'post_author'           => '1',
			  'ping_status'           => get_option('default_ping_status'), 
			  'post_parent'           => 0,
			  'menu_order'            => 0,
			  'to_ping'               =>  '',
			  'pinged'                => '',
			  'post_password'         => '',
			  'guid'                  => '',
			  'post_content_filtered' => '',
			  'post_excerpt'          => '',
			  'import_id'             => 0,
			  'post_title'    => $_POST['name']
			); 

		//	wp_insert_post( $post );

			$id = wp_insert_post($post);

			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			$date = date("d.m.Y H:i");    

			update_post_meta($id, 'name', $_POST['name']);
			update_post_meta($id, 'email', $email);
			update_post_meta($id, 'message', $message);
			update_post_meta($id, 'date', $date);

			$headers = 'From: ' .$name.' <'.$email.'>';
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

			$message='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			</head>
			<style>
			body {
				font-family: Arial;
				font-size:12px;
				line-height:18px;
				color: #333333;	
			}

			a {
				color: #202b5a;
				text-decoration:none;
			}
			a:hover {
				color: #000000;
				text-decoration:underline;
			}
			strong {
				color: #333333;
			}
			</style>
			<body>
			<table width="800" border="0" cellspacing="5" cellpadding="0">
			  <tr>
			  	<td width="150">Imię i nazwisko</td>
			    <td>'.$name.'</td>
			  </tr>
			   <tr>
			  	<td>E-mail</td>
			    <td>'.$email.'</td>
			  </tr>
			   <tr>
			  	<td>Wiadomość</td>
			    <td>'.$message.'</td>
			  </tr>
			  <tr>
			  	<td>Data wysłania</td>
			    <td>'.$date.'</td>
			  </tr>
			</table>
			</body>
			</html>';

			wp_mail( 'pfober@wiredot.com', 'Wiadomość ze strony mapa-szukajacboga.pl', $message, $headers );

			$response = array(
				'alert' => array(
					'type' => 'success',
					'title' => 'Wiadomość została wysłana',
					'message' => 'Dziękujemy.',
					'container' => '.details form'
				),
				'reset' => true
			);
		}

		// display response
		header("Content-Type: application/json");
		echo json_encode($response);
		exit;
	}

// class end
}
