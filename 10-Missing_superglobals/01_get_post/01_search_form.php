<?php
echo '<pre>';
var_dump($_GET);
echo '</pre>';

$keyword = $_GET['keyword'];
echo $keyword;
?>

<form action="01_search_form.php" method="get">
    <input name="keyword" placeholder="Type and hit enter" value="<?php echo $keyword ?>">
    <button>Search</button>
</form>