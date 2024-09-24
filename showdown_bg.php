<?php
$bg = array('https://files.catbox.moe/tel7gz.png', 'https://files.catbox.moe/bs2xcf.png', 'https://files.catbox.moe/635456.png', 'https://files.catbox.moe/l8l5x6.png', 
'https://files.catbox.moe/fx787n.png', 'https://files.catbox.moe/ysldyk.png', 'https://files.catbox.moe/z60z13.png', 'https://files.catbox.moe/2uof1y.png',
'https://files.catbox.moe/k8uzwd.png', 'https://files.catbox.moe/2bpqei.png', 'https://files.catbox.moe/wr07wi.png', 'https://files.catbox.moe/jwjxgk.png',
'https://files.catbox.moe/zg3bym.png', 'https://files.catbox.moe/n3frl4.png', 'https://files.catbox.moe/h3g5lv.png', 'https://files.catbox.moe/r053yq.png',
'https://files.catbox.moe/zp7c7h.png', 'https://files.catbox.moe/fds7jt.png', 'https://files.catbox.moe/byicli.png', 'https://files.catbox.moe/4xyr65.png',
'https://files.catbox.moe/lxx73w.png', 'https://files.catbox.moe/ijmyon.png', 'https://files.catbox.moe/knwsdc.png', 'https://files.catbox.moe/jrlqsf.png',
'https://files.catbox.moe/co3qdy.png', 'https://files.catbox.moe/4ah2yi.png', 'https://files.catbox.moe/ldrigm.png', 'https://files.catbox.moe/pqeycf.png',
'https://files.catbox.moe/1hv07d.png');

header('Content-type: image/png');
echo file_get_contents($bg[array_rand($bg)]);
?>
