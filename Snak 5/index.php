<?php
    $paragraph = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique eveniet nostrum exercitationem cupiditate reprehenderit. Aliquam cum unde magnam cupiditate ullam aliquid odio laborum id maxime laudantium rerum voluptate fugit similique neque animi suscipit excepturi veritatis, temporibus ducimus minus quos, sint quo modi. Expedita amet nemo velit recusandae voluptatem. Nulla harum sequi dolor odio quisquam, odit iusto, neque nemo atque, in impedit doloribus architecto! Totam recusandae nobis ipsa dolorem assumenda architecto nam minima dolores blanditiis amet alias odit, soluta fugiat beatae molestiae iste. Nobis aliquam quas iste maxime, autem temporibus. Molestiae repellat impedit ad, voluptas iusto consequatur tempore officia neque cum quas ipsum nostrum, fugit accusamus atque dolorem eius explicabo officiis deleniti eligendi ex reiciendis dolores maiores sapiente repellendus? Exercitationem quam, vitae libero pariatur, officia natus ex laudantium aspernatur quidem, facere a reprehenderit inventore amet dicta! Fuga nihil fugiat ab dolorem adipisci alias at sit laudantium sapiente eos? Autem officiis, rem suscipit blanditiis nihil error a! Adipisci veritatis nesciunt sint modi saepe fugiat quisquam. Odit, consequatur voluptas. Dolorum delectus aspernatur dolorem dicta repellendus deserunt ullam. Magni neque amet ex labore similique nesciunt, soluta sed quis totam impedit ut numquam blanditiis aliquid ullam illum. Architecto, consectetur deserunt. Vel expedita corrupti magni fugiat temporibus nam facere fuga, rem ullam delectus quam accusamus nulla mollitia magnam deserunt sapiente odit sint. Eum inventore aut laudantium ullam corporis dicta sint. Nesciunt molestiae aut numquam inventore, rem harum expedita delectus quis explicabo veniam deleniti blanditiis ad totam? Aliquid asperiores inventore ea molestias, quisquam veniam obcaecati molestiae nisi facilis doloribus iste illo eaque cupiditate quae ducimus commodi fuga id error aut nulla velit quaerat modi. Sit quod quos animi quasi, unde enim asperiores, magni, architecto aliquam itaque et excepturi dolore porro illum beatae? Enim aliquid perferendis provident consectetur possimus itaque, corporis velit nulla saepe temporibus aliquam soluta, maiores numquam vitae. Accusamus voluptatem similique ut earum natus, asperiores labore sequi ex. Sunt doloribus asperiores non cum! Eveniet ad tenetur recusandae laudantium aliquam nemo doloribus laboriosam dolorum architecto esse fugit veniam, illum voluptas reiciendis hic, nesciunt quae sunt vitae ab deleniti totam! Iusto, iure distinctio dolore illo sint est architecto. Quisquam doloremque saepe quia veniam illum ullam molestias adipisci provident ex exercitationem? Voluptas commodi voluptatibus maxime, amet quae illum optio nostrum iure veniam! Aperiam non tempore totam eaque velit, praesentium nostrum sed placeat autem vitae odio repellat itaque corporis quam ducimus temporibus architecto, repudiandae reiciendis reprehenderit voluptatibus facilis error sequi eius. Saepe dolorum aperiam dolor atque ex incidunt officiis excepturi fugiat, eveniet error totam sed doloremque facere ipsam, ut neque ipsum, aliquam architecto dicta nobis similique eligendi harum? Fuga necessitatibus eos pariatur accusantium nulla ea nostrum, tempora quos quas porro id ipsa deserunt atque tempore hic vero? Animi magnam maxime illum ex fuga, est, ad ipsum quia obcaecati, ab doloribus exercitationem id officiis similique dolor fugit non? Fugiat ut repudiandae blanditiis, maiores perspiciatis et quasi perferendis nulla hic vitae, optio quae quo ex doloremque reiciendis architecto quibusdam. Perspiciatis distinctio in totam hic aliquam aut minima facilis culpa magni quaerat quasi quos ea ad sequi deserunt saepe consequuntur dignissimos, odio aperiam sed. Corporis asperiores repudiandae eos libero recusandae tempora voluptate cupiditate, similique ipsa at illo non vitae soluta dolores neque? Accusamus deleniti soluta non, iure vitae laborum itaque. Quaerat expedita quia quas voluptates itaque corrupti ducimus porro inventore explicabo pariatur perspiciatis non tempora dicta natus ratione voluptatem rerum accusantium dolores impedit ipsam adipisci illo, cum rem eaque? Distinctio dolorum quisquam aliquid mollitia aspernatur libero veritatis similique! Eum, officiis! Quidem velit quas ea totam. Natus magnam repudiandae nobis illum, animi et cum aliquam neque quo. Minus neque dolorum pariatur voluptate rem modi magnam dolor, amet laboriosam, tempora quisquam praesentium esse at tenetur qui possimus veritatis hic cupiditate eum labore explicabo iste! Dolorum totam, recusandae ut doloremque repellat qui explicabo ab deserunt, magnam eius necessitatibus iure fugiat accusamus modi pariatur dicta soluta quidem. Corrupti quia accusantium magnam eveniet non commodi cumque nihil rem. Rem amet, praesentium quasi esse mollitia aut quos quidem cupiditate doloremque sunt, eius maiores cumque maxime voluptatibus eligendi unde quaerat ab! Soluta, molestiae. Repudiandae possimus velit eveniet, aspernatur rerum, tempora illum nemo ut incidunt repellendus vero esse corporis, tempore nam obcaecati? Vel fugiat quis voluptas veritatis hic? Rerum ipsam aut laborum expedita harum, accusamus tempore alias nemo ad cum dolore eligendi est quasi dolorum qui, adipisci sapiente porro dolor quo placeat voluptatum! Accusantium quam dolorum reprehenderit repellendus ea esse. Blanditiis quam aperiam cumque earum culpa doloremque mollitia voluptatem eos ex placeat! Ipsa provident dignissimos blanditiis vel molestiae dolore dolores soluta eligendi. Ad, eveniet animi tenetur fugiat officia dolorem, beatae cupiditate non atque nostrum quae minus fugit libero excepturi explicabo similique suscipit obcaecati! Quasi nihil porro ipsum, qui culpa tempora sit. Sunt, deserunt iusto. Id repudiandae laborum corporis sapiente fugiat quia, sint tenetur consequuntur tempore earum aperiam! Laudantium corrupti quibusdam atque.";

    $collection = [];
    $index = 0;
    while($paragraph != ''){
        $arrIndex = strpos($paragraph,'.');
        
        $collection[] = substr($paragraph, 0, $arrIndex+1);
        $paragraph = str_replace($collection[$index], '', $paragraph);
        $index++;
    }
    function printCollection($array){
        for($i = 0; $i < count($array); $i++){
            $ind = $i +1;
            echo "<h1>Par $ind :</h1><h3>$array[$i] </h3>";
        }
    };

    printCollection($collection);
    echo $paragraph;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>
    
</body>
</html>