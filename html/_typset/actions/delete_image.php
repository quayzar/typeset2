<?
include "../include.php";
include "$site_root/$admin_folder/pages/includes/security.php";

if (!isset($_POST)):
	$typset->respond(array(
		"status" => "error",
		"message" => "no info sent to delete action"
	));
endif;

// Gather data
$data = (object) array(
	"file" => "$site_root/$typset_settings->content_folder/$_POST[file]",
	"type" => $_POST['type'],
	"id" => $_POST['id']
);

// Update database
$query = "UPDATE $data->type SET
	image=null
	WHERE id=:id";
$query_data = array("id" => $data->id);	
if (!$db->run($query, $query_data)):
	$typset->respond(array(
		"status" => "error",
		"message" => "Error deleting image from database"
	));
endif;

// Delete file
if (is_file($data->file)):
	if (unlink($data->file)):
		$typset->respond(array(
			"status" => "success",
			"message" => "File successfully deleted: $data->file"
		));	
	else:
		$typset->respond(array(
			"status" => "error",
			"message" => "File couldn't be deleted: $data->file"
		));	
	endif;
else:
	$typset->respond(array(
		"status" => "error",
		"message" => "File doesn't exist: $data->file"
	));		
endif;

?>