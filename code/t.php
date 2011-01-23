<pre>
<?

$prefix = $_GET['p'];

$s = new SaeStorage();
$num = 0;
while ( $ret = $s->getList("discuzx", "$prefix*", 100, $num ) ) {
    foreach($ret as $file) {
        echo "{$file}\n";
        $num ++;
    }
}

?>
</pre>

