

<pre>
<?

$s = new SaeStorage();

$num = 0;

while ( $ret = $s->getList("discuzx", "*", 100, $num ) ) {

    foreach($ret as $file) {
        echo "{$file}\n";
        $num ++;
    }
}


?>
</pre>

attachment
SaeStorage
