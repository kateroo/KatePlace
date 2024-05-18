<?php
// Check if the 'url' GET parameter is set
if(isset($_GET['url'])) {
    // Fetch and display the content of the URL
    echo file_get_contents($_GET['url']);
} else {
    echo "No URL set.";
}
?>