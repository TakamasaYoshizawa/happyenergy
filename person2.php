<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>person2.php</title>
    </head>

    <body>
        <?php
            $honmei = $_POST['honmei'];
            $aite = $_POST['aite'];
        
                switch ($honmei){

                    case 'ippaku':

                        if($aite == "ippaku"){
                            print "最大吉方４、７　<br />おすすめメニュー：ペペロンチーノ、グリーンサラダ<br >おすすめスポット：空港、レストラン、遊園地";
                        } else if($aite == "jikoku"){
                            print "最大吉方２、６　<br />おすすめメニュー：飲茶 <br />おすすめスポット：お城、レストラン、遊園地、神社仏閣、教会";
                        } else if ($aite == "sanpeki"){
                            print "最大吉方4 <br />おすすめメニュー：パスタ、グリーンサラダ<br />おすすめスポット：空港、大きな駅、ヒーリングサロン";
                        } else if ($aite == "shiroku"){
                            print "最大吉方3 <br />おすすめメニュー：お酢たっぷりサラダ、柑橘フルーツ<br />おすすめスポット：コンサート、森林、お笑い劇場";
                        } else if ($aite == "goou"){
                            print "最大吉方6,7 <br />おすすめメニュー：飲茶<br />おすすめスポット：お城、レストラン、遊園地、神社仏閣、教会";
                        } else if ($aite == "roppaku"){
                            print "最大吉方7 <br />おすすめメニュー：鳥料理<br />おすすめスポット：レストラン、居酒屋、喫茶店、湖、遊園地";
                        } else if ($aite == "shiseki"){
                            print "最大吉方6 <br />おすすめメニュー：飲茶<br />おすすめスポット：お城、神社仏閣、教会、高級ブランド店";
                        } else if ($aite == "happaku"){
                            print "最大吉方6,7 <br />おすすめメニュー：飲茶<br />おすすめスポット：お城、レストラン、遊園地、神社仏閣、教会";
                        } else if ($aite == "kyushi"){
                            print "最大吉方3、4 <br />おすすめメニュー：パスタ、グリーンサラダ<br />おすすめスポット：コンサート、森林、お笑い劇場、空港";
                        }

                    break;

                    case 'jikoku':

                        if($aite == "ippaku"){
                            print "最大吉方6、7　<br />おすすめメニュー：飲茶　<br >おすすめスポット：お城、神社仏閣、高級ブランド店";
                        } else if($aite == "jikoku"){
                            print "最大吉方8、9　<br />おすすめメニュー：焼肉、アボカドサラダ <br />おすすめスポット：山、橋、高台、映画館、劇場、ショールーム";
                        } else if ($aite == "sanpeki"){
                            print "最大吉方９ <br />おすすめメニュー：エビ、蟹料理、トマトサラダ<br />おすすめスポット：映画館、劇場、プラネタリウム、競馬場";
                        } else if ($aite == "shiroku"){
                            print "最大吉方９ <br />おすすめメニュー：エビ、蟹料理、トマトサラダ<br />おすすめスポット：映画館、劇場、プラネタリウム、競馬場";
                        } else if ($aite == "goou"){
                            print "最大吉方８、９ <br />おすすめメニュー：焼肉とアボカドのサラダ<br />おすすめスポット：山、橋、高台、映画館、劇場、ショールーム";
                        } else if ($aite == "roppaku"){
                            print "最大吉方７、８ <br />おすすめメニュー：焼肉とキムチ<br />おすすめスポット：レストラン、遊園地、山、箸、高台";
                        } else if ($aite == "shiseki"){
                            print "最大吉方６、８ <br />おすすめメニュー：飲茶、青椒肉絲<br />おすすめスポット：お城、神社仏閣、教会、山、橋、高台";
                        } else if ($aite == "happaku"){
                            print "最大吉方９、７ <br />おすすめメニュー：親子丼、トマトサラダ<br />おすすめスポット：映画館、劇場、レストラン、遊園地";
                        } else if ($aite == "kyushi"){
                            print "最大吉方９、８ <br />おすすめメニュー：焼肉<br />おすすめスポット：橋、山、高台、旅館、ホテル";
                        }

                    break;

                    case 'sanpeki':

                        if($aite == "ippaku"){
                            print "最大吉方４　<br />おすすめメニュー：パスタ、グリーンサラダ　<br >おすすめスポット：空港、大きな駅、ヒーリングサロン";
                        } else if($aite == "jikoku"){
                            print "最大吉方９　<br />おすすめメニュー：エビ、蟹料理、トマトサラダ<br />おすすめスポット：映画館、劇場、プラネタリウム、競馬場";
                        } else if ($aite == "sanpeki"){
                            print "最大吉方１、９ <br />おすすめメニュー：寿司、あさりの味噌汁<br />おすすめスポット：海、川、水族館、温泉、映画館、劇場";
                        } else if ($aite == "shiroku"){
                            print "最大吉方１、９ <br />おすすめメニュー：寿司、あさりの味噌汁<br />おすすめスポット：海、川、水族館、温泉、映画館、劇場";
                        } else if ($aite == "goou"){
                            print "最大吉方９ <br />おすすめメニュー：エビ、蟹料理、トマトサラダ<br />おすすめスポット：映画館、劇場、プラネタリウム、競馬場";
                        } else if ($aite == "roppaku"){
                            print "最大吉方１ <br />おすすめメニュー：寿司で日本酒<br />おすすめスポット：海、川、水族館、温泉、居酒屋";
                        } else if ($aite == "shiseki"){
                            print "最大吉方１ <br />おすすめメニュー：寿司で日本酒<br />おすすめスポット：海、川、水族館、温泉、居酒屋";
                        } else if ($aite == "happaku"){
                            print "最大吉方９ <br />おすすめメニュー：エビ、蟹料理、トマトサラダ<br />おすすめスポット：映画館、劇場、プラネタリウム、競馬場";
                        } else if ($aite == "kyushi"){
                            print "最大吉方４ <br />おすすめメニュー：パスタ、グリーンサラダ<br />おすすめスポット：空港、大きな駅、ヒーリングサロン";
                        }

                    break;

                    case 'shiroku':

                        if($aite == "ippaku"){
                            print "最大吉方３　<br />おすすめメニュー：お酢たっぷりサラダ、柑橘フルーツ　<br >おすすめスポット：コンサート、森林、お笑い劇場、ボーリング場";
                        } else if($aite == "jikoku"){
                            print "最大吉方９　<br />おすすめメニュー：エビ、蟹料理、トマトサラダ<br />おすすめスポット：映画館、劇場、プラネタリウム、競馬場";
                        } else if ($aite == "sanpeki"){
                            print "最大吉方１、９ <br />おすすめメニュー：寿司、あさりの味噌汁<br />おすすめスポット：海、川、水族館、温泉、映画館、劇場";
                        } else if ($aite == "shiroku"){
                            print "最大吉方１、９ <br />おすすめメニュー：寿司、あさりの味噌汁<br />おすすめスポット：海、川、水族館、温泉、映画館、劇場";
                        } else if ($aite == "goou"){
                            print "最大吉方９ <br />おすすめメニュー：エビ、蟹料理、トマトサラダ<br />おすすめスポット：映画館、劇場、プラネタリウム、競馬場";
                        } else if ($aite == "roppaku"){
                            print "最大吉方１ <br />おすすめメニュー：寿司で日本酒<br />おすすめスポット：海、川、水族館、温泉、居酒屋";
                        } else if ($aite == "shiseki"){
                            print "最大吉方１ <br />おすすめメニュー：寿司で日本酒<br />おすすめスポット：海、川、水族館、温泉、居酒屋";
                        } else if ($aite == "happaku"){
                            print "最大吉方９ <br />おすすめメニュー：エビ、蟹料理、トマトサラダ<br />おすすめスポット：映画館、劇場、プラネタリウム、競馬場";
                        } else if ($aite == "kyushi"){
                            print "最大吉方３ <br />おすすめメニュー：お酢たっぷりサラダ、柑橘フルーツ<br />おすすめスポット：コンサート、森林、お笑い劇場";
                        }

                    break;

                    case 'goou':

                        if($aite == "ippaku"){
                            print "最大吉方６、７　<br />おすすめメニュー：飲茶<br >おすすめスポット：お城、レストラン、遊園地、神社仏閣、教会";
                        } else if($aite == "jikoku"){
                            print "最大吉方８、９　<br />おすすめメニュー：焼肉、アボカドサラダ、わかめスープ<br />おすすめスポット：山、橋、高台、映画館、劇場、ショールーム";
                        } else if ($aite == "sanpeki"){
                            print "最大吉方９ <br />おすすめメニュー：エビ、蟹料理、トマトサラダ<br />おすすめスポット：映画館、劇場、プラネタリウム、競馬場";
                        } else if ($aite == "shiroku"){
                            print "最大吉方９ <br />おすすめメニュー：エビ、蟹料理、トマトサラダ<br />おすすめスポット：海、川、水族館、温泉、映画館、劇場";
                        } else if ($aite == "goou"){
                            print "最大吉方２、９ <br />おすすめメニュー：エビ蟹炒飯、わかめスープ<br />おすすめスポット：野球場、公園、スーパー、映画館、劇場";
                        } else if ($aite == "roppaku"){
                            print "最大吉方２、７ <br />おすすめメニュー：キムチ鍋<br />おすすめスポット：野球場、公園、スーパー、レストラン、遊園地";
                        } else if ($aite == "shiseki"){
                            print "最大吉方２、６ <br />おすすめメニュー：飲茶、飴デザート<br />おすすめスポット：野球場、公園、スーパー、お城、神社仏閣";
                        } else if ($aite == "happaku"){
                            print "最大吉方２、９ <br />おすすめメニュー：エビ、蟹炒飯、わかめスープ<br />おすすめスポット：野球場、公園、スーパー、映画館、劇場";
                        } else if ($aite == "kyushi"){
                            print "最大吉方２、８ <br />おすすめメニュー：すき焼き<br />おすすめスポット：野球場、公園、スーパー、山、橋、高台";
                        }

                    break;

                    case 'roppaku':

                        if($aite == "ippaku"){
                            print "最大吉方７　<br />おすすめメニュー：鳥料理<br >おすすめスポット：レストラン、居酒屋、喫茶店、湖、遊園地";
                        } else if($aite == "jikoku"){
                            print "最大吉方７、８　<br />おすすめメニュー：焼肉、キムチ<br />おすすめスポット：レストラン、居酒屋、喫茶店、山、橋、高台";
                        } else if ($aite == "sanpeki"){
                            print "最大吉方１ <br />おすすめメニュー：寿司で日本酒<br />おすすめスポット：海、川、水族館、温泉、居酒屋";
                        } else if ($aite == "shiroku"){
                            print "最大吉方１ <br />おすすめメニュー：寿司で日本酒<br />おすすめスポット：海、川、水族館、温泉、居酒屋";
                        } else if ($aite == "goou"){
                            print "最大吉方２、７ <br />おすすめメニュー：キムチ鍋<br />おすすめスポット：野球場、公園、スーパー、レストラン、遊園地";
                        } else if ($aite == "roppaku"){
                            print "最大吉方２、７ <br />おすすめメニュー：鳥キムチ鍋<br />おすすめスポット：野球場、公園、スーパー、レストラン、遊園地";
                        } else if ($aite == "shiseki"){
                            print "最大吉方１、２ <br />おすすめメニュー：海鮮丼<br />おすすめスポット：海、川、水族館、温泉、野球場、公園、スーパー";
                        } else if ($aite == "happaku"){
                            print "最大吉方２、７ <br />おすすめメニュー：キムチ鍋<br />おすすめスポット：野球場、公園、スーパー、レストラン、遊園地";
                        } else if ($aite == "kyushi"){
                            print "最大吉方２、８ <br />おすすめメニュー：すき焼き<br />おすすめスポット：野球場、公園、スーパー、山、橋、高台";
                        }

                    break;

                    case 'shiseki':

                        if($aite == "ippaku"){
                            print "最大吉方６　<br />おすすめメニュー：飲茶<br >おすすめスポット：お城、神社仏閣、教会、高級ブランド店";
                        } else if($aite == "jikoku"){
                            print "最大吉方６、８　<br />おすすめメニュー：飲茶、青椒肉絲<br />おすすめスポット：お城、神社仏閣、教会、山、橋、高台";
                        } else if ($aite == "sanpeki"){
                            print "最大吉方１ <br />おすすめメニュー：寿司で日本酒<br />おすすめスポット：海、川、水族館、温泉、居酒屋";
                        } else if ($aite == "shiroku"){
                            print "最大吉方１ <br />おすすめメニュー：寿司で日本酒<br />おすすめスポット：海、川、水族館、温泉、居酒屋";
                        } else if ($aite == "goou"){
                            print "最大吉方２、６ <br />おすすめメニュー：飲茶、飴デザート<br />おすすめスポット：野球場、公園、スーパー、お城、神社仏閣、教会";
                        } else if ($aite == "roppaku"){
                            print "最大吉方１、２ <br />おすすめメニュー：海鮮鍋<br />おすすめスポット：海、川、水族館、温泉、野球場、公園、スーパー";
                        } else if ($aite == "shiseki"){
                            print "最大吉方２、１<br />おすすめメニュー：海鮮鍋<br />おすすめスポット：海、川、水族館、温泉、野球場、公園、スーパー";
                        } else if ($aite == "happaku"){
                            print "最大吉方２、６ <br />おすすめメニュー：飲茶、飴デザート<br />おすすめスポット：野球場、公園、スーパー、お城、神社仏閣、教会";
                        } else if ($aite == "kyushi"){
                            print "最大吉方２、８ <br />おすすめメニュー：すき焼き<br />おすすめスポット：野球場、公園、スーパー、山、橋、高台";
                        }

                    break;

                    case 'happaku':

                        if($aite == "ippaku"){
                            print "最大吉方６、７　<br />おすすめメニュー：飲茶<br >おすすめスポット：お城、レストラン、遊園地、神社仏閣、教会";
                        } else if($aite == "jikoku"){
                            print "最大吉方７、９　<br />おすすめメニュー：トム・ヤム・クン<br />おすすめスポット：映画館、劇場、レストラン、遊園地";
                        } else if ($aite == "sanpeki"){
                            print "最大吉方９ <br />おすすめメニュー：エビ・蟹料理、トマトサラダ<br />おすすめスポット：映画館、劇場、プラネタリウム、競馬場";
                        } else if ($aite == "shiroku"){
                            print "最大吉方９ <br />おすすめメニュー：エビ・蟹料理、トマトサラダ<br />おすすめスポット：映画館、劇場、プラネタリウム、競馬場";
                        } else if ($aite == "goou"){
                            print "最大吉方９、７ <br />おすすめメニュー：トム・ヤム・クン<br />おすすめスポット：映画館、劇場、レストラン、遊園地";
                        } else if ($aite == "roppaku"){
                            print "最大吉方２、７ <br />おすすめメニュー：キムチ鍋<br />おすすめスポット：野球場、公園、スーパー、レストラン、遊園地";
                        } else if ($aite == "shiseki"){
                            print "最大吉方２、６<br />おすすめメニュー：飲茶、飴デザート<br />おすすめスポット：野球場、公園、スーパー、お城、神社仏閣、教会";
                        } else if ($aite == "happaku"){
                            print "最大吉方２、９ <br />おすすめメニュー：エビ、蟹炒飯とわかめスープ<br />おすすめスポット：野球場、公園、スーパー、映画館、劇場";
                        } else if ($aite == "kyushi"){
                            print "最大吉方２ <br />おすすめメニュー：鍋料理<br />おすすめスポット：野球場、公園、スーパー、コンビニ";
                        }

                    break;

                    case 'kyushi':

                        if($aite == "ippaku"){
                            print "最大吉方３、４　<br />おすすめメニュー：パスタ、グリーンサラダ<br >おすすめスポット：コンサート、森林、お笑い劇場、飛行場";
                        } else if($aite == "jikoku"){
                            print "最大吉方８　<br />おすすめメニュー：焼肉<br />おすすめスポット：橋、山、高台、旅館、ホテル";
                        } else if ($aite == "sanpeki"){
                            print "最大吉方４ <br />おすすめメニュー：パスタ、グリーンサラダ<br />おすすめスポット：空港、大きな駅、ヒーリングサロン";
                        } else if ($aite == "shiroku"){
                            print "最大吉方３ <br />おすすめメニュー：お酢たっぷりサラダ、柑橘フルーツ<br />おすすめスポット：コンサート、森林、お笑い劇場、ボーリング場";
                        } else if ($aite == "goou"){
                            print "最大吉方２、８ <br />おすすめメニュー：すき焼き<br />おすすめスポット：野球場、公園、スーパー、山、橋、高台";
                        } else if ($aite == "roppaku"){
                            print "最大吉方２、８ <br />おすすめメニュー：すき焼き<br />おすすめスポット：野球場、公園、スーパー、山、橋、高台";
                        } else if ($aite == "shiseki"){
                            print "最大吉方２、８<br />おすすめメニュー：すき焼き<br />おすすめスポット：野球場、公園、スーパー、山、橋、高台";
                        } else if ($aite == "happaku"){
                            print "最大吉方２ <br />おすすめメニュー：鍋料理<br />おすすめスポット：野球場、公園、スーパー、コンビニ";
                        } else if ($aite == "kyushi"){
                            print "最大吉方２、４ <br />おすすめメニュー：パスタ、グリーンサラダ<br />おすすめスポット：野球場、公園、スーパー、コンビニ、空港";
                        }

                    break;

                    default;
                    break;

                }        
        
        
        ?>
    </body>
    </html>