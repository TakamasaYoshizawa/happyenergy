<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>hapiena1.php</title>
</head>

<body>

  <?php
    $year = $_POST['year'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    $sex = $_POST['sex'];

        switch ($year) {

          case '2045':
          case '2036':
          case '2027':
          case '2018':
          case '2009':
          case '2000':
          case '1991':
          case '1982':
          case '1973':
          case '1964':
          case '1955':
          case '1946':
          case '1937':
          case '1928':


          if($year == 1928 && $month == "jan" && $day <= 7 || $year == 1946 && $month == "jan" && $day <= 7 || $year == 1955 && $month == "jan" && $day <= 7 || $year == 2036 && $month == "jan" && $day <= 5 || $year == 2045 && $month == "jan" && $day <= 4 || $month == "jan" && $day <= 6){
            print "一白水星<br />sub is 7<br />最大吉方 6 相星 3,4 <br /> 傾斜 8 同会 4";
          } else if ($year == 1928 && $month == "jan" && $day >= 8 || $year == 1946 && $month == "jan" && $day >= 8 || $year == 1955 && $month == "jan" && $day >= 8 || $year == 2036 && $month == "jan" >= 6 || $year == 2045 && $month == "jan" && $day >= 5|| $month == "jan" && $day >= 7){
            print "一白水星<br /> sub is 6<br />最大吉方 7 相星 3,4<br /> 傾斜 9 同会 5";
          } else if ($year == 1973 && $month == "feb" && $day <= 4 || $year == 2009 && $month == "feb" && $day <= 4 || $year == 2018 && $month == "feb" && $day <= 4 || $year == 2027 && $month == "feb" && $day <= 3 || $year == 2036 && $month == "feb" && $day <= 3 || $year == 2045 && $month == "feb" && $day <= 2 || $month == "feb" && $day <= 5){
            print "一白水星<br /> sub is 6<br />最大吉方 7 相星 3,4<br /> 傾斜 9 同会 5";
          } else if ($year == 1973 && $month == "feb" && $day >= 5 || $year == 2009 && $month == "feb" && $day >= 5 || $year == 2018 && $month == "feb" && $day >= 5 || $year == 2027 && $month == "feb" && $day >= 4 || $year == 2036 && $month == "feb" && $day >= 4 || $year == 2045 && $month == "feb" && $day >= 3 || $month == "feb" && $day >= 6){
            print "九紫火星<br />sub is 5<br />最大吉方 2,8 相星 3,4<br /> 傾斜 9 同会 4";
          } else if ($year == 1928 && $month == "mar" && $day <= 4 || $year == 1964 && $month == "mar" && $day <= 4 || $year == 2027 && $month == "mar" && $day <= 5 || $year == 2036 && $month == "mar" && $day <= 4|| $year == 2045 && $month == "mar" && $day <= 4|| $month == "mar" && $day <= 3) {
            print "九紫火星<br />sub is 5<br />最大吉方 2,8 相星 3,4<br /> 傾斜 9 同会 4";
          } else if ($year == 1928 && $month == "mar" && $day >= 5 || $year == 1964 && $month == "mar" && $day >= 5 || $year == 2027 && $month == "mar" && $day >= 6 || $year == 2036 && $month == "mar" && $day >= 5 || $year == 2045 && $month == "mar" && $day >= 5|| $month == "mar" && $day >= 4){
            print "九紫火星<br />sub is 4<br />最大吉方 3 相星 2,8<br /> 傾斜 1 同会 5";
          } else if ($year == 1964 && $month == "apr" && $day <= 4 || $year == 2000 && $month == "apr" && $day <= 4 || $year == 2009 && $month == "apr" && $day <= 4 || $year == 2027 && $month == "apr" && $day <= 5 || $year == 2036 && $month == "apr" && $day <= 3|| $year == 2045 && $month == "apr" && $day <= 3|| $month == "apr" && $day <= 5){
            print "九紫火星<br />sub is 4<br />最大吉方 3 相星 2,8<br /> 傾斜 1 同会 5";
          } else if ($year == 1964 && $month == "apr" && $day >= 5 || $year == 2000 && $month == "apr" && $day >= 5 || $year == 2009 && $month == "apr" && $day >= 5 || $year == 2027 && $month == "apr" && $day >= 6 || $year == 2036 && $month == "apr" && $day >= 4 || $year == 2045 && $month == "apr" && $day >= 4|| $month == "apr" && $day >= 6){
            print "九紫火星<br />sub is 3<br />最大吉方 4 相星 2,8<br /> 傾斜 2 同会 6";
          } else if ($year == 2000 && $month == "may" && $day <= 3 || $year == 2027 && $month == "may" && $day <= 5 || $month == "may" && $day <= 4){
            print "九紫火星<br />sub is 3<br />最大吉方 4 相星 2,8<br /> 傾斜 2 同会 6";
          } else if ($year == 2000 && $month == "may" && $day >= 4 || $year == 2027 && $month == "may" && $day >= 6 ||$month == "may" && $day >= 5){
            print "九紫火星<br />sub is 2<br />最大吉方 8 相星 3,4<br /> 傾斜 3 同会 7";
          } else if ($year == 1964 && $month == "jun" && $day <= 4 || $year == 2000 && $month == "jun" && $day <= 4 || $year == 2009 && $month == "jun" && $day <= 4 || $year == 2018 && $month == "jun" && $day <= 4 || $year == 2036 && $month == "jun" && $day <= 4||$year == 2045 && $month == "jun" && $day <= 4 || $month == "jun" && $day <= 5){
            print "九紫火星<br />sub is 2<br />最大吉方 8 相星 3,4<br /> 傾斜 3 同会 7";
          } else if ($year == 1964 && $month == "jun" && $day >= 5 || $year == 2000 && $month == "jun" && $day >= 5 || $year == 2009 && $month == "jun" && $day >= 5 || $year == 2018 && $month == "jun" && $day >= 5 || $year == 2036 && $month == "jun" && $day >= 5 || $year == 2045 && $month == "jun" && $day >= 5|| $month == "jun" && $day >= 6){
            print "九紫火星<br />sub is 1<br />最大吉方 3,4 相星 2,8<br /> 傾斜 4 同会 8";
          } else if ($year == 2000 && $month == "jul" && $day <= 4 || $year == 2009 && $month == "jul" && $day <= 4 || $year == 2027 && $month == "jul" && $day <= 6 || $year == 2045 && $month == "jul" && $day <= 6|| $month == "jul" && $day <= 5){
            print "九紫火星<br />sub is 1<br />最大吉方 3,4 相星 2,8<br /> 傾斜 4 同会 8";
          } else if ($year == 2000 && $month == "jul" && $day >= 5 || $year == 2009 && $month == "jul" && $day >= 5 || $year == 2027 && $month == "jul" && $day >= 7 || $year == 2045 && $month == "jul" && $day >= 7|| $month == "jul" && $day >= 6){
            print "九紫火星<br />sub is 9<br />最大吉方 3,4 相星 2,8<br /> 傾斜 4 同会 8";
          } else if ($year == 1946 && $month == "aug" && $day <= 7 || $year == 1955 && $month == "aug" && $day <= 7 ||$year == 2027 && $month == "aug" && $day <= 7 || $month == "aug" && $day <= 6){
            print "九紫火星<br />sub is 9<br />最大吉方 3,4 相星 2,8<br /> 傾斜 4 同会 8";
          } else if ($year == 1946 && $month == "aug" && $day >= 8 || $year == 1955 && $month == "aug" && $day >= 8 ||$year == 2027 && $month == "aug" && $day >= 8 || $month == "aug" && $day >= 7){
            print "九紫火星<br />sub is 8<br />最大吉方 2 相星 3,4<br /> 傾斜 6 同会 1";
          } else if ($year == 1964 && $month == "sep" && $day <= 6 || $year == 2000 && $month == "sep" && $day <= 6 || $year == 2009 && $month == "sep" && $day <= 6 || $year == 2018 && $month == "sep" && $day <= 6 ||$year == 2036 && $month == "sep" && $day <= 6  || $year == 2045 && $month == "sep" && $day <= 6|| $month == "sep" && $day <= 7){
            print "九紫火星<br />sub is 8<br />最大吉方 2 相星 3,4<br /> 傾斜 6 同会 1";
          } else if ($year == 1964 && $month == "sep" && $day >= 7 || $year == 2000 && $month == "sep" && $day >= 7 || $year == 2009 && $month == "sep" && $day >= 7 || $year == 2018 && $month == "sep" && $day >= 7 || $year == 2036 && $month == "sep" && $day >= 7 || $year == 2045 && $month == "sep" && $day >= 7|| $month == "sep" && $day >= 8){
            print "九紫火星<br />sub is 7<br />最大吉方 2,8 相星 3,4<br /> 傾斜 7 同会 2";
          } else if ($year == 1964 && $month == "oct" && $day <= 6 || $year == 2000 && $month == "oct" && $day <= 6 || $year == 2009 && $month == "oct" && $day <= 6 || $month == "oct" && $day <= 7){
            print "九紫火星<br />sub is 7<br />最大吉方 2,8 相星 3,4<br /> 傾斜 7 同会 2";
          } else if ($year == 1964 && $month == "oct" && $day >= 7 || $year == 2000 && $month == "oct" && $day >= 7 || $year == 2009 && $month == "oct" && $day >= 7 || $month == "oct" && $day >= 8){
            print "九紫火星<br />sub is 6<br />最大吉方 2,8 相星 3,4<br /> 傾斜 8 同会 3";
          } else if ($year == 1928 && $month == "nov" && $day <= 7 || $year == 1964 && $month == "nov" && $day <= 7 || $year == 1973 && $month == "nov" && $day <= 7 || $year == 2000 && $month == "nov" && $day <= 7 || $year == 2009 && $month == "nov" && $day <= 7 || $year == 2018 && $month == "nov" && $day <= 7 ||$year == 2027 && $month == "nov" && $day <= 7 || $year == 2036 && $month == "nov" && $day <= 6 || $year == 2045 && $month == "nov" && $day <= 6|| $month == "nov" && $day <= 8){
            print "九紫火星<br />sub is 6<br />最大吉方 2,8 相星 3,4<br /> 傾斜 8 同会 3";
          } else if ($year == 1928 && $month == "nov" && $day >= 8 || $year == 1964 && $month == "nov" && $day >= 8 || $year == 1973 && $month == "nov" && $day >= 8 || $year == 2000 && $month == "nov" && $day >= 8 || $year == 2009 && $month == "nov" && $day >= 8 || $year == 2018 && $month == "nov" && $day >= 8 || $year == 2027 && $month == "nov" && $day >= 8 || $year == 2036 && $month == "nov" && $day >= 7 ||$year == 2045 && $month == "nov" && $day >= 7 || $month == "nov" && $day >= 9){
            print "九紫火星<br />sub is 5<br />最大吉方 2,8 相星 3,4<br /> 傾斜 9 同会 4";
          } else if ($year == 1964 && $month == "dec" && $day <= 6 || $year == 1973 && $month == "dec" && $day <= 6 || $year == 2000 && $month == "dec" && $day <= 6 || $year == 2009 && $month == "dec" && $day <= 6 || $year == 2018 && $month == "dec" && $day <= 6 || $year == 2027 && $month == "dec" && $day <= 6 ||$year == 2036 && $month == "dec" && $day <= 5 ||$year == 2045 && $month == "dec" && $day <= 6|| $month == "dec" && $day <= 7){
            print "九紫火星<br />sub is 5<br />最大吉方 2,8 相星 3,4<br /> 傾斜 9 同会 4";
          } else if ($year == 1964 && $month == "dec" && $day >= 7 || $year == 1973 && $month == "dec" && $day >= 7 || $year == 2000 && $month == "dec" && $day >= 7 || $year == 2009 && $month == "dec" && $day >= 7 || $year == 2018 && $month == "dec" && $day >= 7 ||$year == 2027 && $month == "dec" && $day >= 7 ||$year == 2036 && $month == "dec" && $day >= 6 || $year == 2045 && $month == "dec" && $day >= 7|| $month == "dec" && $day >= 8){
            print "九紫火星<br />sub is 4<br />最大吉方 3 相星 2,8<br /> 傾斜 1 同会 5";
          }
          break;

          case '2046':
          case '2037':
          case '2028':
          case '2019':
          case '2010':
          case '2001':
          case '1992':
          case '1983':
          case '1974':
          case '1965':
          case '1956':
          case '1947':
          case '1938':
          case '1929':
          case '1920':


          if ($year == 1947 && $month == "jan" && $day <= 7 || $year == 1956 && $month == "jan" && $day <= 7 ||$year == 2028 && $month == "jan" && $day <= 5 ||$year == 2037 && $month == "jan" && $day <= 4 || $year == 2046 && $month == "jan" && $day <= 4||$month == "jan" && $day <= 6){
             print "九紫火星<br />sub is 4<br />最大吉方 3 相星 2,8<br /> 傾斜 1 同会 5";
          } else if ($year == 1947 && $month == "jan" && $day >= 8 || $year == 1956 && $month == "jan" && $day >= 8 || $year == 2028 && $month == "jan" && $day >= 6 || $year == 2037 && $month == "jan" && $day >= 5 || $year == 2046 && $month == "jan" && $day >= 5|| $month == "jan" && $day >= 7){
            print "九紫火星<br /> sub is 3<br />最大吉方 4 相星 2,8<br /> 傾斜 2 同会 6";
          } else if ($year == 1920 && $month == "feb" && $day <= 4 || $year == 1965 && $month == "feb" && $day <= 4 || $year == 2001 && $month == "feb" && $day <= 4 || $year == 2010 && $month == "feb" && $day <= 4 || $year == 2028 && $month == "feb" && $day <= 3 || $year == 2037 && $month == "feb" && $day <= 2 || $year == 2046 && $month == "feb" && $day <= 3|| $month == "feb" && $day <= 5) {
            print "九紫火星<br /> sub is 3<br />最大吉方 4 相星 2,8<br /> 傾斜 2 同会 6";
          } else if ($year == 1920 && $month == "feb" && $day >= 5 || $year == 1965 && $month == "feb" && $day >= 5 || $year == 2001 && $month == "feb" && $day >= 5 || $year == 2010 && $month == "feb" && $day >= 5 || $year == 2028 && $month == "feb" && $day >= 4 || $year == 2037 && $month == "feb" && $day >= 3 || $year == 2046 && $month == "feb" && $day >= 4|| $month == "feb" && $day >= 6){
            print "八白土星<br />sub is 2<br />最大吉方 9,6,7 相星 none <br /> 傾斜 2 同会 5";
          } else if ($year == 1920 && $month == "mar" && $day <= 5 || $year == 1947 && $month == "mar" && $day <= 4 || $year == 1956 && $month == "mar" && $day <= 4 ||$year == 2028 && $month == "mar" && $day <= 4  ||$year == 2037 && $month == "mar" && $day <= 4 || $year == 2046 && $month == "mar" && $day <= 4|| $month == "mar" && $day <= 3) {
            print "八白土星<br />sub is 2<br />最大吉方 9,6,7 相星 none <br /> 傾斜 2 同会 5";
          } else if ($year === 1920 && $month == "mar" && $day >= 6 || $year === 1947 && $month == "mar" && $day >= 5 || $year === 1956 && $month == "mar" && $day >= 5  || $year === 2028 && $month == "mar" && $day >= 5 || $year === 2037 && $month == "mar" && $day >= 5 || $year === 2046 && $month == "mar" && $day >= 5|| $month == "mar" && $day >= 4){
            print "八白土星<br />sub is 1<br />最大吉方 6,7 相星 2,9<br /> 傾斜 3 同会 6";
          } else if ($year == 1920 && $month == "apr" && $day <= 4 || $year == 1956 && $month == "apr" && $day <= 4 || $year == 1992 && $month == "apr" && $day <= 4 || $year == 2001 && $month == "apr" && $day <= 4 || $year == 2028 && $month == "apr" && $day <= 3 || $year == 2037 && $month == "apr" && $day <= 3 || $year == 2046 && $month == "apr" && $day <= 3|| $month == "apr" && $day <= 5){
            print "八白土星<br />sub is 1<br />最大吉方 6,7 相星 2,9<br /> 傾斜 3 同会 6";
          } else if ($year == 1920 && $month == "apr" && $day >= 5 || $year == 1956 && $month == "apr" && $day >= 5 || $year == 1992 && $month == "apr" && $day >= 5 || $year == 2001 && $month == "apr" && $day >= 5 ||$year == 2028 && $month == "apr" && $day >= 4 || $year == 2037 && $month == "apr" && $day >= 4 || $year == 2046 && $month == "apr" && $day >= 4 || $month == "apr" && $day >= 6){
            print "八白土星<br />sub is 9<br />最大吉方 2 相星 6,7<br /> 傾斜 4 同会 7";
          } else if ($year == 1920 && $month == "may" && $day <= 5 || $year == 1947 && $month == "may" && $day <= 5 || $year == 1992 && $month == "may" && $day <= 3 || $month == "may" && $day <= 4){
            print "八白土星<br />sub is 9<br />最大吉方 2 相星 6,7<br /> 傾斜 4 同会 7";
          } else if ($year == 1920 && $month == "may" && $day >= 6 || $year == 1947 && $month == "may" && $day >= 6 || $year == 1992 && $month == "may" && $day >= 4 || $month == "may" && $day >= 5){
            print "八白土星<br />sub is 8<br />最大吉方 2,6 相星 9,7<br /> 傾斜 6 同会 9";
          } else if ($year == 1956 && $month == "jun" && $day <= 4 || $year == 1992 && $month == "jun" && $day <= 4 || $year == 2001 && $month == "jun" && $day <= 4 || $year == 2010 && $month == "jun" && $day <= 4 || $year == 2028 && $month == "jun" && $day <= 4 || $year == 2037 && $month == "jun" && $day <= 4 ||$year == 2046 && $month == "jun" && $day <= 4|| $month == "jun" && $day <= 5){
            print "八白土星<br />sub is 8<br />最大吉方 2,6 相星 9,7<br /> 傾斜 6 同会 9";
          } else if ($year == 1956 && $month == "jun" && $day >= 5 || $year == 1992 && $month == "jun" && $day >= 5 || $year == 2001 && $month == "jun" && $day >= 5 || $year == 2010 && $month == "jun" && $day >= 5 || $year == 2028 && $month == "jun" && $day >= 5 ||$year == 2037 && $month == "jun" && $day >= 5 || $year == 2046 && $month == "jun" && $day >= 5|| $month == "jun" && $day >= 6){
            print "八白土星<br />sub is 7<br />最大吉方 2,6 相星 9<br /> 傾斜 6 同会 9";
          } else if ($year == 1920 && $month == "jul" && $day <= 6 || $year == 1992 && $month == "jul" && $day <= 4 || $year == 2001 && $month == "jul" && $day <= 4 || $year == 2037 && $month == "jul" && $day <= 6 ||$year == 2046 && $month == "jul" && $day <= 6|| $month == "jul" && $day <= 5){
            print "八白土星<br />sub is 7<br />最大吉方 2,6 相星 9<br /> 傾斜 6 同会 9";
          } else if ($year == 1920 && $month == "jul" && $day >= 7 || $year == 1992 && $month == "jul" && $day >= 5 || $year == 2001 && $month == "jul" && $day >= 5 ||$year == 2037 && $month == "jul" && $day >= 7 || $year == 2046 && $month == "jul" && $day >= 7|| $month == "jul" && $day >= 6){
            print "八白土星<br />sub is 6<br />最大吉方 2,7 相星 9<br /> 傾斜 7 同会 1";
          } else if ($year == 1920 && $month == "aug" && $day <= 7 || $year == 1929 && $month == "aug" && $day <= 7 || $year == 1938 && $month == "aug" && $day <= 7 || $year == 1947 && $month == "aug" && $day <= 7 || $year == 1983 && $month == "aug" && $day <= 7 || $month == "aug" && $day <= 6){
            print "八白土星<br />sub is 6<br />最大吉方 2,7 相星 9<br /> 傾斜 7 同会 1";
          } else if ($year == 1920 && $month == "aug" && $day >= 8 || $year == 1929 && $month == "aug" && $day >= 8 || $year == 1938 && $month == "aug" && $day >= 8 || $year == 1947 && $month == "aug" && $day >= 8 || $year == 1983 && $month == "aug" && $day >= 8 || $month == "aug" && $day >= 7){
            print "八白土星<br />sub is 5<br />最大吉方 9,2,6,7 相星 none <br /> 傾斜 8 同会 2";
          } else if ($year == 1956 && $month == "sep" && $day <= 6 || $year == 1992 && $month == "sep" && $day <= 6 || $year == 2001 && $month == "sep" && $day <= 6 || $year == 2010 && $month == "sep" && $day <= 6 ||$year == 2028 && $month == "sep" && $day <= 6 || $year == 2037 && $month == "sep" && $day <= 6 || $year == 2046 && $month == "sep" && $day <= 6|| $month == "sep" && $day <= 7){
            print "八白土星<br />sub is 5<br />最大吉方 9,2,6,7 相星 none <br /> 傾斜 8 同会 2";
          } else if ($year == 1956 && $month == "sep" && $day >= 7 || $year == 1992 && $month == "sep" && $day >= 7 || $year == 2001 && $month == "sep" && $day >= 7 || $year == 2010 && $month == "sep" && $day >= 7 ||$year == 2028 && $month == "sep" && $day >= 7 || $year == 2037 && $month == "sep" && $day >= 7 || $year == 2046 && $month == "sep" && $day >= 7|| $month == "sep" && $day >= 8){
            print "八白土星<br />sub is 4<br />最大吉方 9 相星 2,6,7 <br /> 傾斜 9 同会 3";
          } else if ($year == 1992 && $month == "oct" && $day <= 6 || $year == 2001 && $month == "oct" && $day <= 6 || $month == "oct" && $day <= 7){
            print "八白土星<br />sub is 4<br />最大吉方 9 相星 2,6,7 <br /> 傾斜 9 同会 3";
          } else if ($year == 1992 && $month == "oct" && $day >= 7 || $year == 2001 && $month == "oct" && $day >= 7 || $month == "oct" && $day >= 8){
            print "八白土星<br />sub is 3<br />最大吉方 9 相星 2,6,7 <br /> 傾斜 1 同会 4";
          } else if ($year == 1929 && $month == "nov" && $day <= 8 || $year == 1938 && $month == "nov" && $day <= 8 || $year == 1947 && $month == "nov" && $day <= 8 || $year == 1974 && $month == "nov" && $day <= 8 || $year == 1983 && $month == "nov" && $day <= 8 ||$year == 2028 && $month == "nov" && $day <= 6 ||$year == 2037 && $month == "nov" && $day <= 6 ||$year == 2046 && $month == "nov" && $day <= 6|| $month == "nov" && $day <= 7){
            print "八白土星<br />sub is 3<br />最大吉方 9 相星 2,6,7 <br /> 傾斜 1 同会 4";
          } else if ($year == 1929 && $month == "nov" && $day >= 9 || $year == 1938 && $month == "nov" && $day >= 9 || $year == 1947 && $month == "nov" && $day >= 9 || $year == 1974 && $month == "nov" && $day >= 9 || $year == 1983 && $month == "nov" && $day >= 9  || $year == 2028 && $month == "nov" && $day >= 7 ||$year == 2037 && $month == "nov" && $day >= 7 ||$year == 2046 && $month == "nov" && $day >= 7|| $month == "nov" && $day >= 8){
            print "八白土星<br />sub is 2<br />最大吉方 9,6,7 相星 none <br /> 傾斜 2 同会 5";
          } else if ($year == 1920 && $month == "dec" && $day <= 6 || $year == 1956 && $month == "dec" && $day <= 6 || $year == 1992 && $month == "dec" && $day <= 6 || $year == 2001 && $month == "dec" && $day <= 6 || $year == 2010 && $month == "dec" && $day <= 6 ||$year == 2028 && $month == "dec" && $day <= 5 || $year == 2037 && $month == "dec" && $day <= 6 || $year == 2046 && $month == "dec" && $day <= 6|| $month == "dec" && $day <= 7){
            print "八白土星<br />sub is 2<br />最大吉方 9,6,7 相星 none <br /> 傾斜 2 同会 5";
          } else if ($year == 1920 && $month == "dec" && $day >= 7 || $year == 1956 && $month == "dec" && $day >= 7 || $year == 1992 && $month == "dec" && $day >= 7 || $year == 2001 && $month == "dec" && $day >= 7 || $year == 2010 && $month == "dec" && $day >= 7 || $year == 2028 && $month == "dec" && $day >= 6 || $year == 2037 && $month == "dec" && $day >= 7 ||$year == 2046 && $month == "dec" && $day >= 7|| $month == "dec" && $day >= 8){
            print "八白土星<br />sub is 1<br />最大吉方 6,7 相星 2,9 <br /> 傾斜 3 同会 6";
          } 

          break;
          
          case '2047':
          case '2038':
          case '2029':
          case '2020':
          case '2011':
          case '2002':
          case '1993':
          case '1984':
          case '1975':
          case '1966':
          case '1957':
          case '1948':
          case '1939':
          case '1930':
          case '1921':


            if ($year ==1921 && $month == "jan" && $day <= 5 || $year == 1939 && $month == "jan" && $day <= 7 || $year ==1948 && $month == "jan" && $day <= 7 || $year == 1984 && $month == "jan" && $day <= 7 || $year == 2029 && $month == "jan" && $day <= 4 || $year == 2038 && $month == "jan" && $day <= 4 || $year == 2047 && $month == "jan" && $day <= 4|| $month == "jan" && $day <= 6){
              print "七赤金星<br />sub is 7<br />最大吉方 2,6 相星 1,8 <br /> 傾斜 4 同会 6";
            } else if ($year == 1921 && $month == "jan" && $day >= 6 || $year ==1939 && $month == "jan" && $day >= 8 || $year ==1948 && $month == "jan" && $day >= 8 || $year == 1984 && $month == "jan" && $day >= 8 ||$year == 2029 && $month == "jan" && $day >= 5 ||$year == 2038 && $month == "jan" && $day >= 5 ||$year == 2047 && $month == "jan" && $day >= 5|| $month == "jan" && $day >= 7) {
              print "八白土星<br /> sub is 9<br />最大吉方 2 相星 6,7 <br /> 傾斜 4 同会 7";
            } else if ($year == 1957 && $month == "feb" && $day <= 4 || $year == 1993 && $month == "feb" && $day <= 4 || $year == 2002 && $month == "feb" && $day <= 4 ||$year == 2029 && $month == "feb" && $day <= 2 ||$year == 2038 && $month == "feb" && $day <= 3 || $year == 2047 && $month == "feb" && $day <= 3|| $month == "feb" && $day <= 5){
              print "八白土星<br /> sub is 9<br />最大吉方 2 相星 6,7 <br /> 傾斜 4 同会 7";
            } else if ($year == 1957 && $month == "feb" && $day >= 5 || $year == 1993 && $month == "feb" && $day >= 5 || $year == 2002 && $month == "feb" && $day >= 5 || $year == 2029 && $month == "feb" && $day >= 3 || $year == 2038 && $month == "feb" && $day >= 4 || $year == 2047 && $month == "feb" && $day >= 4|| $month == "feb" && $day >= 6){
              print "七赤金星<br />sub is 8<br />最大吉方 2,6 相星 1 <br /> 傾斜 4 同会 6";
            } else if ($year == 1939 && $month == "mar" && $day <= 4 || $year == 1948 && $month == "mar" && $day <= 4 || $year == 1984 && $month == "mar" && $day <= 4 ||$year == 2029 && $month == "mar" && $day <= 4 || $year == 2038 && $month == "mar" && $day <= 4 ||$year == 2047 && $month == "mar" && $day <= 5|| $month == "mar" && $day <= 3) {
              print "七赤金星<br />sub is 8<br />最大吉方 2,6 相星 1 <br /> 傾斜 4 同会 6";
            } else if ($year == 1939 && $month == "mar" && $day >= 5 || $year == 1948 && $month == "mar" && $day >= 5 || $year == 1984 && $month == "mar" && $day >= 5 || $year == 2029 && $month == "mar" && $day >= 5|| $year == 2038 && $month == "mar" && $day >= 5 || $year == 2047 && $month == "mar" && $day >= 6|| $month == "mar" && $day >= 4){
              print "七赤金星<br />sub is 7<br />最大吉方 2,6 相星 1,8 <br /> 傾斜 4 同会 6";
            } else if ($year == 1984 && $month == "apr" && $day <= 4 || $year == 1993 && $month == "apr" && $day <= 4 || $year == 2020 && $month == "apr" && $day <= 4  || $year == 2029 && $month == "apr" && $day <= 3 ||$year == 2038 && $month == "apr" && $day <= 4 ||$year == 2047 && $month == "apr" && $day <= 4|| $month == "apr" && $day <= 5){
              print "七赤金星<br />sub is 7<br />最大吉方 2,6 相星 1,8 <br /> 傾斜 4 同会 6";
            } else if ($year == 1984 && $month == "apr" && $day >= 5 || $year == 1993 && $month == "apr" && $day >= 5 || $year == 2020 && $month == "apr" && $day >= 5 ||$year == 2029 && $month == "apr" && $day >= 4 || $year == 2038 && $month == "apr" && $day >= 5 || $year == 2047 && $month == "apr" && $day >= 5|| $month == "apr" && $day >= 6){
              print "七赤金星<br />sub is 6<br />最大吉方 2,8,1 相星 none <br /> 傾斜 6 同会 8";
            } else if ($year == 1939 && $month == "may" && $day <= 5 || $year == 1984 && $month == "may" && $day <= 3 || $year == 2020 && $month == "may" && $day <= 3 || $month == "may" && $day <= 4){
              print "七赤金星<br />sub is 6<br />最大吉方 2,8,1 相星 none <br /> 傾斜 6 同会 8";
            } else if ($year == 1939 && $month == "may" && $day >= 6 || $year == 1984 && $month == "may" && $day >= 4 || $year == 2020 && $month == "may" && $day >= 4 || $month == "may" && $day >= 5){
              print "七赤金星<br />sub is 5<br />最大吉方 2,8,6 相星 1 <br /> 傾斜 7 同会 9";
            } else if ($year == 1948 && $month == "jun" && $day <= 4 || $year == 1984 && $month == "jun" && $day <= 4 || $year == 1993 && $month == "jun" && $day <= 4 || $year == 2020 && $month == "jun" && $day <= 4 || $year == 2029 && $month == "jun" && $day <= 4 || $year == 2038 && $month == "jun" && $day <= 4|| $month == "jun" && $day <= 5){
              print "七赤金星<br />sub is 5<br />最大吉方 2,8,6 相星 1 <br /> 傾斜 7 同会 9";
            } else if ($year == 1948 && $month == "jun" && $day >= 5 || $year == 1984 && $month == "jun" && $day >= 5 || $year == 1993 && $month == "jun" && $day >= 5 || $year == 2020 && $month == "jun" && $day >= 5 ||$year == 2029 && $month == "jun" && $day >= 5 || $year == 2038 && $month == "jun" && $day >= 5|| $month == "jun" && $day >= 6){
              print "七赤金星<br />sub is 4<br />最大吉方 1 相星 2,6,8 <br /> 傾斜 8 同会 1";
            } else if ($year == 1984 && $month == "jul" && $day <= 4 || $year ==2020 && $month == "jul" && $day <= 4 ||$year ==2029 && $month == "jul" && $day <= 6 ||$year ==2038 && $month == "jul" && $day <= 6 || $year ==2047 && $month == "jul" && $day <= 6|| $month == "jul" && $day <= 5){
              print "七赤金星<br />sub is 4<br />最大吉方 1 相星 2,6,8 <br /> 傾斜 8 同会 1";
            } else if ($year == 1984 && $month == "jul" && $day >= 5 || $year ==2020 && $month == "jul" && $day >= 5 || $year ==2029 && $month == "jul" && $day >= 7 ||$year ==2038 && $month == "jul" && $day >= 7 ||$year ==2047 && $month == "jul" && $day >= 7|| $month == "jul" && $day >= 6){
              print "七赤金星<br />sub is 3<br />最大吉方 1 相星 2,6,8 <br /> 傾斜 9 同会 2";
            } else if ($year == 1921 && $month == "aug" && $day <= 7 || $year == 1930 && $month == "aug" && $day <= 7 || $year == 1939 && $month == "aug" && $day <= 7 || $year == 1975 && $month == "aug" && $day <= 7 || $month == "aug" && $day <= 6){
              print "七赤金星<br />sub is 3<br />最大吉方 1 相星 2,6,8 <br /> 傾斜 9 同会 2";
            } else if ($year == 1921 && $month == "aug" && $day >= 8 || $year == 1930 && $month == "aug" && $day >= 8 || $year == 1939 && $month == "aug" && $day >= 8 || $year == 1975 && $month == "aug" && $day >= 8 || $month == "aug" && $day >= 7){
              print "七赤金星<br />sub is 2<br />最大吉方 8,6 相星 1 <br /> 傾斜 1 同会 3";
            } else if ($year == 1984 && $month == "sep" && $day <= 6 || $year == 1993 && $month == "sep" && $day <= 6 || $year == 2020 && $month == "sep" && $day <= 6 || $year == 2029 && $month == "sep" && $day <= 6 || $year == 2038 && $month == "sep" && $day <= 6|| $month == "sep" && $day <= 7){
              print "七赤金星<br />sub is 2<br />最大吉方 8,6 相星 1 <br /> 傾斜 1 同会 3";
            } else if ($year == 1984 && $month == "sep" && $day >= 7 || $year == 1993 && $month == "sep" && $day >= 7 || $year == 2020 && $month == "sep" && $day >= 7 ||$year == 2029 && $month == "sep" && $day >= 7 || $year == 2038 && $month == "sep" && $day >= 7 || $month == "sep" && $day >= 8){
              print "七赤金星<br />sub is 1<br />最大吉方 6 相星 2,8 <br /> 傾斜 2 同会 4";
            } else if ($year == 1984 && $month == "oct" && $day <= 6 || $year == 2020 && $month == "oct" && $day <= 6 || $month == "oct" && $day <= 7){
              print "七赤金星<br />sub is 1<br />最大吉方 6 相星 2,8 <br /> 傾斜 2 同会 4";
            } else if ($year == 1984 && $month == "oct" && $day >= 7 || $year == 2020 && $month == "oct" && $day >= 7 || $month == "oct" && $day >= 8){
              print "七赤金星<br />sub is 9<br />最大吉方 2,8 相星 1,6 <br /> 傾斜 3 同会 5";
            } else if ($year == 1948 && $month == "nov" && $day <= 7 || $year == 1957 && $month == "nov" && $day <= 7 || $year == 1984 && $month == "nov" && $day <= 7 || $year == 1993 && $month == "nov" && $day <= 7 || $year == 2002 && $month == "nov" && $day <= 7 || $year == 2020 && $month == "nov" && $day <= 7 ||$year == 2029 && $month == "nov" && $day <= 6 ||$year == 2038 && $month == "nov" && $day <= 6 || $year == 2047 && $month == "nov" && $day <= 6|| $month == "nov" && $day <= 8){
              print "七赤金星<br />sub is 9<br />最大吉方 2,8 相星 1,6 <br /> 傾斜 3 同会 5";
            } else if ($year == 1948 && $month == "nov" && $day >= 8 || $year == 1957 && $month == "nov" && $day >= 8 || $year == 1984 && $month == "nov" && $day >= 8 || $year == 1993 && $month == "nov" && $day >= 8 || $year == 2002 && $month == "nov" && $day >= 8 || $year == 2020 && $month == "nov" && $day >= 8 || $year == 2029 && $month == "nov" && $day >= 7 || $year == 2038 && $month == "nov" && $day >= 7 || $year == 2047 && $month == "nov" && $day >= 7|| $month == "nov" && $day >= 9){
              print "七赤金星<br />sub is 8<br />最大吉方 2,6 相星 1 <br /> 傾斜 4 同会 6";
            } else if ($year == 1948 && $month == "dec" && $day <= 6 || $year == 1984 && $month == "dec" && $day <= 6 || $year == 1993 && $month == "dec" && $day <= 6 || $year == 2002 && $month == "dec" && $day <= 6 || $year == 2020 && $month == "dec" && $day <= 6 || $year == 2029 && $month == "dec" && $day <= 6 || $year == 2038 && $month == "dec" && $day <= 6 ||$year == 2047 && $month == "dec" && $day <= 6|| $month == "dec" && $day <= 7){
              print "七赤金星<br />sub is 8<br />最大吉方 2,6 相星 1 <br /> 傾斜 4 同会 6";
            } else if ($year == 1948 && $month == "dec" && $day >= 7 || $year == 1984 && $month == "dec" && $day >= 7 || $year == 1993 && $month == "dec" && $day >= 7 || $year == 2002 && $month == "dec" && $day >= 7 || $year == 2020 && $month == "dec" && $day >= 7 || $year == 2029 && $month == "dec" && $day >= 7 ||$year == 2038 && $month == "dec" && $day >= 7 ||$year == 2047 && $month == "dec" && $day >= 7|| $month == "dec" && $day >= 8){
              print "七赤金星<br />sub is 7<br />最大吉方 2,6 相星 1,8 <br /> 傾斜 4 同会 6";
            } 
            break;
          
          case '2021':
          case '2012':
          case '2003':
          case '1994':
          case '1985':
          case '1976':
          case '1967':
          case '1958':
          case '1949':
          case '1940':
          case '1931':
          case '1922':

            if ($year == 1922 && $month == "jan" && $day <= 7 || $year == 1931 && $month == "jan" && $day <= 7 || $year == 1940 && $month == "jan" && $day <= 7 || $year == 1967 && $month == "jan" && $day <= 7 || $month == "jan" && $day <= 6){
              print "七赤金星<br />sub is 7<br />最大吉方 2,6 相星 1,8 <br /> 傾斜 4 同会 6";
            } else if ($year == 1922 && $month == "jan" && $day >= 8 || $year == 1931 && $month == "jan" && $day >= 8 || $year == 1940 && $month == "jan" && $day >= 8 || $year == 1967 && $month == "jan" && $day >= 8 || $month == "jan" && $day >= 7) {
              print "七赤金星<br /> sub is 6<br />最大吉方 2,1,8 相星 なし <br /> 傾斜 6 同会 8";
            } else if ($year == 1985 && $month == "feb" && $day <= 4 || $year == 1994 && $month == "feb" && $day <= 4 || $year == 2021 && $month == "feb" && $day <= 4 || $month == "feb" && $day <= 5){
              print "七赤金星<br /> sub is 6<br />最大吉方 2,1,8 相星 なし <br /> 傾斜 6 同会 8";
            } else if ($year == 1985 && $month == "feb" && $day >= 5 || $year == 1994 && $month == "feb" && $day >= 5 || $year == 2021 && $month == "feb" && $day >= 5 || $month == "feb" && $day >= 6){
              print "六白金星<br />sub is 5<br />最大吉方 2,8,7 相星 1 <br /> 傾斜 6 同会 7";
            } else if ($year == 1931 && $month == "mar" && $day <= 4 || $year == 1940 && $month == "mar" && $day <= 4 || $year == 1976 && $month == "mar" && $day <= 4 || $year == 2021 && $month == "mar" && $day <= 2 || $month == "mar" && $day <= 3) {
              print "六白金星<br />sub is 5<br />最大吉方 2,8,7 相星 1 <br /> 傾斜 6 同会 7";
            } else if ($year == 1931 && $month == "mar" && $day >= 5 || $year == 1940 && $month == "mar" && $day >= 5 || $year == 1976 && $month == "mar" && $day >= 5 || $year == 2021 && $month == "mar" && $day >= 3 || $month == "mar" && $day >= 4){
              print "六白金星<br />sub is 4<br />最大吉方 1 相星 2,7,8 <br /> 傾斜 7 同会 8";
            } else if ($year == 1976 && $month == "apr" && $day <= 4 || $year == 2012 && $month == "apr" && $day <= 4 || $year == 2021 && $month == "apr" && $day <= 4 || $month == "apr" && $day <= 5){
              print "六白金星<br />sub is 4<br />最大吉方 1 相星 2,7,8 <br /> 傾斜 7 同会 8";
            } else if ($year == 1976 && $month == "apr" && $day >= 5 || $year == 2012 && $month == "apr" && $day >= 5 || $year == 2021 && $month == "apr" && $day >= 5 || $month == "apr" && $day >= 6){
              print "六白金星<br />sub is 3<br />最大吉方 1 相星 2,7,8 <br /> 傾斜 8 同会 9";
            } else if ($year == 1931 && $month == "may" && $day <= 5 || $year == 2012 && $month == "may" && $day <= 3 || $year == 2021 && $month == "may" && $day <= 3 || $month == "may" && $day <= 4){
              print "六白金星<br />sub is 3<br />最大吉方 1 相星 2,7,8 <br /> 傾斜 8 同会 9";
            } else if ($year == 1931 && $month == "may" && $day >= 6 || $year == 2012 && $month == "may" && $day >= 6 || $year == 2021 && $month == "may" && $day >= 6 || $month == "may" && $day >= 5){
              print "六白金星<br />sub is 2<br />最大吉方 8,7 相星 1 <br /> 傾斜 9 同会 1";
            } else if ($year == 1976 && $month == "jun" && $day <= 4 || $year == 1985 && $month == "jun" && $day <= 4 || $year == 2012 && $month == "jun" && $day <= 4 || $year == 2021 && $month == "jun" && $day <= 4 || $month == "jun" && $day <= 5){
              print "六白金星<br />sub is 2<br />最大吉方 8,7 相星 1 <br /> 傾斜 9 同会 1";
            } else if ($year == 1976 && $month == "jun" && $day >= 5 || $year == 1985 && $month == "jun" && $day >= 5 || $year == 2012 && $month == "jun" && $day >= 5 || $year == 2021 && $month == "jun" && $day >= 5 || $month == "jun" && $day >= 6){
              print "六白金星<br />sub is 1<br />最大吉方 7 相星 2,8 <br /> 傾斜 1 同会 2";
            } else if ($year == 1931 && $month == "jul" && $day <= 6 || $year == 1976 && $month == "jul" && $day <= 4 || $year == 2012 && $month == "jul" && $day <= 4 || $year == 2021 && $month == "jul" && $day <= 4 || $month == "jul" && $day <= 5){
              print "六白金星<br />sub is 1<br />最大吉方 7 相星 2,8 <br /> 傾斜 1 同会 2";
            } else if ($year == 1931 && $month == "jul" && $day >= 7 || $year == 1976 && $month == "jul" && $day >= 5 || $year == 2012 && $month == "jul" && $day >= 5 || $year == 2021 && $month == "jul" && $day >= 5 || $month == "jul" && $day >= 6){
              print "六白金星<br />sub is 9<br />最大吉方 2,8 相星 1,7 <br /> 傾斜 2 同会 3";
            } else if ($year == 1922 && $month == "aug" && $day <= 7 || $year == 1931 && $month == "aug" && $day <= 7 || $year == 1958 && $month == "aug" && $day <= 7 || $year == 1967 && $month == "aug" && $day <= 7 || $month == "aug" && $day <= 6){
              print "六白金星<br />sub is 9<br />最大吉方 2,8 相星 1,7 <br /> 傾斜 2 同会 3";
            } else if ($year == 1922 && $month == "aug" && $day >= 8 || $year == 1931 && $month == "aug" && $day >= 8 || $year == 1958 && $month == "aug" && $day >= 8 || $year == 1967 && $month == "aug" && $day >= 8 || $month == "aug" && $day >= 7){
              print "六白金星<br />sub is 8<br />最大吉方 2,7 相星 1 <br /> 傾斜 3 同会 4";
            } else if ($year == 1976 && $month == "sep" && $day <= 6 || $year == 1985 && $month == "sep" && $day <= 6 || $year == 2012 && $month == "sep" && $day <= 6 || $year == 2021 && $month == "sep" && $day <= 6 || $month == "sep" && $day <= 7){
              print "六白金星<br />sub is 8<br />最大吉方 2,7 相星 1 <br /> 傾斜 3 同会 4";
            } else if ($year == 1976 && $month == "sep" && $day >= 7 || $year == 1985 && $month == "sep" && $day >= 7 || $year == 2012 && $month == "sep" && $day >= 7 || $year == 2021 && $month == "sep" && $day >= 7 || $month == "sep" && $day >= 8){
              print "六白金星<br />sub is 7<br />最大吉方 2,8,1 相星 none <br /> 傾斜 4 同会 5";
            } else if ($year == 1931 && $month == "oct" && $day <= 8 || $year == 1976 && $month == "oct" && $day <= 6 || $year == 2012 && $month == "oct" && $day <= 6 || $year == 2021 && $month == "oct" && $day <= 6 || $month == "oct" && $day <= 7){
              print "六白金星<br />sub is 7<br />最大吉方 2,8,1 相星 none <br /> 傾斜 4 同会 5";
            } else if ($year == 1931 && $month == "oct" && $day >= 9 || $year == 1976 && $month == "oct" && $day >= 7 || $year == 2012 && $month == "oct" && $day >= 7 || $year == 2021 && $month == "oct" && $day >= 7 || $month == "oct" && $day >= 8){
              print "六白金星<br />sub is 6<br />最大吉方 8,7 相星 1,2 <br /> 傾斜 9 同会 1";
            } else if ($year == 1922 && $month == "nov" && $day <= 8 || $year == 1931 && $month == "nov" && $day <= 8 || $year == 1949 && $month == "nov" && $day <= 8 || $year == 1958 && $month == "nov" && $day <= 8 || $year == 1967 && $month == "nov" && $day <= 8 || $year == 2003 && $month == "nov" && $day <= 8 || $month == "nov" && $day <= 7){
              print "六白金星<br />sub is 6<br />最大吉方 8,7 相星 1,2 <br /> 傾斜 9 同会 1";
            } else if ($year == 1922 && $month == "nov" && $day >= 9 || $year == 1931 && $month == "nov" && $day >= 9 || $year == 1949 && $month == "nov" && $day >= 9 || $year == 1958 && $month == "nov" && $day >= 9 || $year == 1967 && $month == "nov" && $day >= 9 || $year == 2003 && $month == "nov" && $day >= 9 || $month == "nov" && $day >= 8){
              print "六白金星<br />sub is 5<br />最大吉方 2,8,7 相星 1 <br /> 傾斜 6 同会 7";
            } else if ($year == 1940 && $month == "dec" && $day <= 6 || $year == 1976 && $month == "dec" && $day <= 6 || $year == 1985 && $month == "dec" && $day <= 6 || $year == 2012 && $month == "dec" && $day <= 6 || $year == 2021 && $month == "dec" && $day <= 6 || $month == "dec" && $day <= 7){
              print "六白金星<br />sub is 5<br />最大吉方 2,8,7 相星 1 <br /> 傾斜 6 同会 7";
            } else if ($year == 1940 && $month == "dec" && $day >= 7 || $year == 1976 && $month == "dec" && $day >= 7 || $year == 1985 && $month == "dec" && $day >= 7 || $year == 2012 && $month == "dec" && $day >= 7 || $year == 2021 && $month == "dec" && $day >= 7 || $month == "dec" && $day >= 8){
              print "六白金星<br />sub is 4<br />最大吉方 1 相星 2,8,7 <br /> 傾斜 7 同会 8";
            } 
    
          break;

          case '2022':
          case '2013':
          case '2004':
          case '1995':
          case '1986':
          case '1977':
          case '1968':
          case '1959':
          case '1950':
          case '1941':
          case '1932':
          case '1923':

            if ($year == 1923 && $month == "jan" && $day <= 7 || $year == 1932 && $month == "jan" && $day <= 7 || $year == 1968 && $month == "jan" && $day <= 7 || $month == "jan" && $day <= 6){
              print "六白金星<br />sub is 4<br />最大吉方 1 相星 2,8,7 <br /> 傾斜 7 同会 8";
            } else if ($year ==1923 && $month == "jan" && $day >= 8 || $year == 1932 && $month == "jan" && $day >= 8 || $year ==1968 && $month == "jan" && $day >= 8 || $month == "jan" && $day >= 7) {
              print "六白金星<br /> sub is 3<br />最大吉方 1 相星 2,7,8 <br /> 傾斜 8 同会 9";
            } else if ($year == 1977 && $month == "feb" && $day <= 4 || $year == 2013 && $month == "feb" && $day <= 4 ||  $year == 2022 && $month == "feb" && $day <= 4 || $month == "feb" && $day <= 5){
              print "六白金星<br /> sub is 3<br />最大吉方 1 相星 2,7,8 <br /> 傾斜 8 同会 9";
            } else if ($year == 1977 && $month == "feb" && $day >= 5 || $year == 2013 && $month == "feb" && $day >= 5 || $year == 2022 && $month == "feb" && $day >= 5 || $month == "feb" && $day >= 6){
              print "五黄土星<br />sub is 2<br />最大吉方 9,8,6,7 相星 none <br /> 傾斜 8 同会 8";
            } else if ($year == 1923 && $month == "mar" && $day <= 4 || $year == 1932 && $month == "mar" && $day <= 4 || $year == 1968 && $month == "mar" && $day <= 4 || $month == "mar" && $day <= 3) {
              print "五黄土星<br />sub is 2<br />最大吉方 9,8,6,7 相星 none <br /> 傾斜 8 同会 8";
            } else if ($year == 1923 && $month == "mar" && $day >= 5 || $year == 1932 && $month == "mar" && $day >= 5 || $year == 1968 && $month == "mar" && $day >= 5 || $month == "mar" && $day >= 4){
              print "五黄土星<br />sub is 1<br />最大吉方 6,7 相星 2,8,9 <br /> 傾斜 9 同会 9";
            } else if ($year == 1968 && $month == "apr" && $day <= 4 || $year == 2004 && $month == "apr" && $day <= 4 || $year == 2013 && $month == "apr" && $day <= 4 || $year == 2022 && $month == "apr" && $day <= 4 || $month == "apr" && $day <= 5){
              print "五黄土星<br />sub is 1<br />最大吉方 6,7 相星 2,8,9 <br /> 傾斜 9 同会 9";
            } else if ($year == 1968 && $month == "apr" && $day >= 5 || $year == 2004 && $month == "apr" && $day >= 5 || $year == 2013 && $month == "apr" && $day >= 5 || $year == 2022 && $month == "apr" && $day >= 5 || $month == "apr" && $day >= 6){
              print "五黄土星<br />sub is 9<br />最大吉方 2,8 相星 6,7 <br /> 傾斜 1 同会 1";
            } else if ($year == 1923 && $month == "may" && $day <= 5 || $year == 2004 && $month == "may" && $day <= 3 || $month == "may" && $day <= 4){
              print "五黄土星<br />sub is 9<br />最大吉方 2,8 相星 6,7 <br /> 傾斜 1 同会 1";
            } else if ($year == 1923 && $month == "may" && $day >= 6 || $year == 2004 && $month == "may" && $day >= 4 || $month == "may" && $day >= 5){
              print "五黄土星<br />sub is 8<br />最大吉方 9,2,6,7 相星 none <br /> 傾斜 2 同会 2";
            } else if ($year == 1968 && $month == "jun" && $day <= 4 || $year == 2004 && $month == "jun" && $day <= 4 || $year == 2013 && $month == "jun" && $day <= 4 || $year == 2022 && $month == "jun" && $day <= 4 || $month == "jun" && $day <= 5){
              print "五黄土星<br />sub is 8<br />最大吉方 9,2,6,7 相星 none <br /> 傾斜 2 同会 2";
            } else if ($year == 1968 && $month == "jun" && $day >= 5 || $year == 2004 && $month == "jun" && $day >= 5 || $year == 2013 && $month == "jun" && $day >= 5 || $year == 2022 && $month == "jun" && $day >= 5 || $month == "jun" && $day >= 6){
              print "五黄土星<br />sub is 7<br />最大吉方 2,8,6 相星 9 <br /> 傾斜 3 同会 3";
            } else if ($year == 1923 && $month == "jul" && $day <= 6 || $year == 2004 && $month == "jul" && $day <= 4 || $year == 2013 && $month == "jul" && $day <= 4 || $month == "jul" && $day <= 5){
              print "五黄土星<br />sub is 7<br />最大吉方 2,8,6 相星 9 <br /> 傾斜 3 同会 3";
            } else if ($year == 1923 && $month == "jul" && $day >= 7 || $year == 2004 && $month == "jul" && $day >= 5 || $year == 2013 && $month == "jul" && $day >= 5 || $month == "jul" && $day >= 6){
              print "五黄土星<br />sub is 6<br />最大吉方 2,8,7 相星 9 <br /> 傾斜 4 同会 4";
            } else if ($year == 1923 && $month == "aug" && $day <= 7 || $year == 1950 && $month == "aug" && $day <= 7 || $year == 1959 && $month == "aug" && $day <= 7 || $month == "aug" && $day <= 6){
              print "五黄土星<br />sub is 6<br />最大吉方 2,8,7 相星 9 <br /> 傾斜 4 同会 4";
            } 
            else if ($year == 1923 && $month == "aug" && $day >= 8 && $sex == "male" || $year == 1950 && $month == "aug" && $day >= 8 && $sex == "male" || $year == 1959 && $month == "aug" && $day >= 8 && $sex == "male" || $month == "aug" && $day >= 7 && $sex == "male"){
            print "五黄土星<br />sub is 5<br />最大吉方 2,8,6 相星 9,7 <br /> 傾斜 3 同会 3<br />男";
            } else if ($year == 1968 && $month == "sep" && $day <= 6 && $sex == "male" || $year == 2004 && $month == "sep" && $day <= 6 && $sex == "male" || $year == 2013 && $month == "sep" && $day <= 6 && $sex == "male" || $year == 2022 && $month == "sep" && $day <= 6 && $sex == "male" || $month == "sep" && $day <= 7 && $sex == "male"){
            print "五黄土星<br />sub is 5<br />最大吉方 2,8,6 相星 9,7 <br /> 傾斜 3 同会 3<br />男";
            } else if ($year == 1923 && $month == "aug" && $day >= 8 && $sex == "female" || $year == 1950 && $month == "aug" && $day >= 8 && $sex == "female" || $year == 1959 && $month == "aug" && $day >= 8 && $sex == "female" || $month == "aug" && $day >= 7 && $sex == "female"){
            print "五黄土星<br />sub is 5<br />最大吉方 2,8,7 相星 9,6 <br /> 傾斜 4 同会 4<br />女";
            } else if ($year == 1968 && $month == "sep" && $day <= 6 && $sex == "female" || $year == 2004 && $month == "sep" && $day <= 6 && $sex == "female" || $year == 2013 && $month == "sep" && $day <= 6 && $sex == "female" || $year == 2022 && $month == "sep" && $day <= 6 && $sex == "female" || $month == "sep" && $day <= 7 && $sex == "female"){
            print "五黄土星<br />sub is 5<br />最大吉方 2,8,7 相星 9,6 <br /> 傾斜 4 同会 4<br />女";
            }
          
              else if ($year == 1968 && $month == "sep" && $day >= 7 || $year == 2004 && $month == "sep" && $day >= 7 || $year == 2013 && $month == "sep" && $day >= 7 || $year == 2022 && $month == "sep" && $day >= 7 || $month == "sep" && $day >= 8){
              print "五黄土星<br />sub is 4<br />最大吉方 9 相星 2,6,7,8 <br /> 傾斜 6 同会 6";
            } else if ($year == 1923 && $month == "oct" && $day <= 8 || $year == 1968 && $month == "oct" && $day <= 6 || $year == 2004 && $month == "oct" && $day <= 6 || $year == 2013 && $month == "oct" && $day <= 6 || $month == "oct" && $day <= 7){
              print "五黄土星<br />sub is 4<br />最大吉方 9 相星 2,6,7,8 <br /> 傾斜 6 同会 6";
            } else if ($year == 1923 && $month == "oct" && $day >= 9 ||$year == 1968 && $month == "oct" && $day >= 7 || $year == 2004 && $month == "oct" && $day >= 7 || $year == 2013 && $month == "oct" && $day >= 7 || $month == "oct" && $day >= 8){
              print "五黄土星<br />sub is 3<br />最大吉方 9 相星 2,6,7,8 <br /> 傾斜 7 同会 7";
            } else if ($year == 1923 && $month == "nov" && $day <= 8 || $year == 1941 && $month == "nov" && $day <= 8 || $year == 1950 && $month == "nov" && $day <= 8 || $year == 1959 && $month == "nov" && $day <= 8 || $year == 1995 && $month == "nov" && $day <= 8 || $month == "nov" && $day <= 7){
              print "五黄土星<br />sub is 3<br />最大吉方 9 相星 2,6,7,8 <br /> 傾斜 7 同会 7";
            } else if ($year == 1923 && $month == "nov" && $day >= 9 || $year == 1941 && $month == "nov" && $day >= 9 || $year == 1950 && $month == "nov" && $day >= 9 || $year == 1959 && $month == "nov" && $day >= 9 || $year == 1995 && $month == "nov" && $day >= 9 || $month == "nov" && $day >= 8){
              print "五黄土星<br />sub is 2<br />最大吉方 9,8,6,7 相星 none <br /> 傾斜 8 同会 8";
            } else if ($year == 1923 && $month == "dec" && $day <= 7 || $year == 1941 && $month == "dec" && $day <= 7 || $year == 1950 && $month == "dec" && $day <= 7 || $year == 1959 && $month == "dec" && $day <= 7 || $year == 1986 && $month == "dec" && $day <= 7 || $year == 1995 && $month == "dec" && $day <= 7 || $month == "dec" && $day <= 6){
              print "五黄土星<br />sub is 2<br />最大吉方 9,8,6,7 相星 none <br /> 傾斜 8 同会 8";
            } else if ($year == 1923 && $month == "dec" && $day >= 8 || $year == 1941 && $month == "dec" && $day >= 8 || $year == 1950 && $month == "dec" && $day >= 8 || $year == 1959 && $month == "dec" && $day >= 8 || $year == 1986 && $month == "dec" && $day >= 8 || $year == 1995 && $month == "dec" && $day >= 8 || $month == "dec" && $day >= 7){
              print "五黄土星<br />sub is 1<br />最大吉方 6,7 相星 2,8,9 <br /> 傾斜 9 同会 9";
            } 
            
          break;

          case '2023':
          case '2014':
          case '2005':
          case '1996':
          case '1987':
          case '1978':
          case '1969':
          case '1960':
          case '1951':
          case '1942':
          case '1933':
          case '1924':

            if ($year == 1924 && $month == "jan" && $day <= 7 || $year == 1951 && $month == "jan" && $day <= 7 || $year == 1960 && $month == "jan" && $day <= 7 || $month == "jan" && $day <= 6){
               print "五黄土星<br />sub is 1<br />最大吉方 6,7 相星 2,8,9 <br /> 傾斜 9 同会 9";
            } else if ($year == 1924 && $month == "jan" && $day >= 8 || $year == 1951 && $month == "jan" && $day >= 8 || $year == 1960 && $month == "jan" && $day >= 8 || $month == "jan" && $day >= 7){
              print "五黄土星<br /> sub is 9<br />最大吉方 2,8 相星 6,7 <br /> 傾斜 1 同会 1";
            } else if ($year == 1969 && $month == "feb" && $day <= 4 || $year == 2005 && $month == "feb" && $day <= 4 || $year == 2014 && $month == "feb" && $day <= 4 || $month == "feb" && $day <= 5) {
              print "五黄土星<br /> sub is 9<br />最大吉方 2,8 相星 6,7 <br /> 傾斜 1 同会 1";
            } else if ($year == 1969 && $month == "feb" && $day >= 5 || $year == 2005 && $month == "feb" && $day >= 5 || $year == 2014 && $month == "feb" && $day >= 5 || $month == "feb" && $day >= 6){
              print "四緑木星<br />sub is 8<br />最大吉方 9 相星 1,3 <br /> 傾斜 1 同会 9";
            } else if ($year == 1924 && $month == "mar" && $day <= 4 || $year == 1951 && $month == "mar" && $day <= 4 || $year == 1960 && $month == "mar" && $day <= 4 || $month == "mar" && $day <= 3) {
              print "四緑木星<br />sub is 8<br />最大吉方 9 相星 1,3 <br /> 傾斜 1 同会 9";
            } else if ($year == 1924 && $month == "mar" && $day >= 5 || $year == 1951 && $month == "mar" && $day >= 5 || $year == 1960 && $month == "mar" && $day >= 5 || $month == "mar" && $day >= 4){
              print "四緑木星<br />sub is 7<br />最大吉方 1 相星 3,9 <br /> 傾斜 2 同会 1";
            } else if ($year == 1960 && $month == "apr" && $day <= 4 || $year == 1996 && $month == "apr" && $day <= 4 || $year == 2005 && $month == "apr" && $day <= 4 || $month == "apr" && $day <= 5){
              print "四緑木星<br />sub is 7<br />最大吉方 1 相星 3,9 <br /> 傾斜 2 同会 1";
            } else if ($year == 1960 && $month == "apr" && $day >= 5 || $year == 1996 && $month == "apr" && $day >= 5 || $year == 2005 && $month == "apr" && $day >= 5 || $month == "apr" && $day >= 6){
              print "四緑木星<br />sub is 6<br />最大吉方 1 相星 3,9 <br /> 傾斜 3 同会 2";
            } else if ($year == 1996 && $month == "may" && $day <= 3 || $month == "may" && $day <= 4){
              print "四緑木星<br />sub is 6<br />最大吉方 1 相星 3,9 <br /> 傾斜 3 同会 2";
            } else if ($year == 1996 && $month == "may" && $day >= 4 || $month == "may" && $day >= 5){
              print "四緑木星<br />sub is 5<br />最大吉方 9 相星 1,3 <br /> 傾斜 4 同会 3";
            } else if ($year == 1960 && $month == "jun" && $day <= 4 || $year == 1996 && $month == "jun" && $day <= 4 || $year == 2005 && $month == "jun" && $day <= 4 || $year == 2014 && $month == "jun" && $day <= 4 || $month == "jun" && $day <= 5){
              print "四緑木星<br />sub is 5<br />最大吉方 9 相星 1,3 <br /> 傾斜 4 同会 3";
            } else if ($year == 1960 && $month == "jun" && $day >= 5 || $year == 1996 && $month == "jun" && $day >= 5 || $year == 2005 && $month == "jun" && $day >= 5 || $year == 2014 && $month == "jun" && $day >= 5 || $month == "jun" && $day >= 6){
              print "四緑木星<br />sub is 4<br />最大吉方 1,9 相星 3 <br /> 傾斜 6 同会 5";
            } else if ($year == 1996 && $month == "jul" && $day <= 4 || $year == 2005 && $month == "jul" && $day <= 4 || $month == "jul" && $day <= 5){
              print "四緑木星<br />sub is 4<br />最大吉方 1,9 相星 3 <br /> 傾斜 6 同会 5";
            } else if ($year == 1996 && $month == "jul" && $day >= 5 || $year == 2005 && $month == "jul" && $day >= 5 || $month == "jul" && $day >= 6){
              print "四緑木星<br />sub is 3<br />最大吉方 1,9 相星 none <br /> 傾斜 6 同会 5";
            } else if ($year == 1942 && $month == "aug" && $day <= 7 || $year == 1951 && $month == "aug" && $day <= 7 || $year == 1987 && $month == "aug" && $day <= 7 || $month == "aug" && $day <= 6){
              print "四緑木星<br />sub is 3<br />最大吉方 1,9 相星 none <br /> 傾斜 6 同会 5";
            } else if ($year == 1942 && $month == "aug" && $day >= 8 || $year == 1951 && $month == "aug" && $day >= 8 || $year == 1987 && $month == "aug" && $day >= 8 || $month == "aug" && $day >= 7){
              print "四緑木星<br />sub is 2<br />最大吉方 9 相星 1,3 <br /> 傾斜 7 同会 6";
            } else if ($year == 1960 && $month == "sep" && $day <= 6 || $year == 1996 && $month == "sep" && $day <= 6 || $year == 2005 && $month == "sep" && $day <= 6 || $year == 2014 && $month == "sep" && $day <= 6 || $month == "sep" && $day <= 7){
              print "四緑木星<br />sub is 2<br />最大吉方 9 相星 1,3 <br /> 傾斜 7 同会 6";
            } else if ($year == 1960 && $month == "sep" && $day >= 7 || $year == 1996 && $month == "sep" && $day >= 7 || $year == 2005 && $month == "sep" && $day >= 7 || $year == 2014 && $month == "sep" && $day >= 7 || $month == "sep" && $day >= 8){
              print "四緑木星<br />sub is 1<br />最大吉方 3 相星 9 <br /> 傾斜 8 同会 7";
            } else if ($year == 1996 && $month == "oct" && $day <= 6 || $year == 2005 && $month == "oct" && $day <= 6 || $month == "oct" && $day <= 7){
              print "四緑木星<br />sub is 1<br />最大吉方 3 相星 9 <br /> 傾斜 8 同会 7";
            } else if ($year == 1996 && $month == "oct" && $day >= 7 || $year == 2005 && $month == "oct" && $day >= 7 || $month == "oct" && $day >= 8){
              print "四緑木星<br />sub is 9<br />最大吉方 3 相星 1 <br /> 傾斜 9 同会 8";
            } else if ($year == 1933 && $month == "nov" && $day <= 8 || $year == 1942 && $month == "nov" && $day <= 8 || $year == 1951 && $month == "nov" && $day <= 8 || $year == 1978 && $month == "nov" && $day <= 8 || $year == 1987 && $month == "nov" && $day <= 8 || $month == "nov" && $day <= 7){
              print "四緑木星<br />sub is 9<br />最大吉方 3 相星 1 <br /> 傾斜 9 同会 8";
            } else if ($year == 1933 && $month == "nov" && $day >= 9 || $year == 1942 && $month == "nov" && $day >= 9 || $year == 1951 && $month == "nov" && $day >= 9 || $year == 1978 && $month == "nov" && $day >= 9 || $year == 1987 && $month == "nov" && $day >= 9 || $month == "nov" && $day >= 8){
              print "四緑木星<br />sub is 8<br />最大吉方 9 相星 1,3 <br /> 傾斜 1 同会 9";
            } else if ($year == 1960 && $month == "dec" && $day <= 6 || $year == 1969 && $month == "dec" && $day <= 6 || $year == 1996 && $month == "dec" && $day <= 6 || $year == 2005 && $month == "dec" && $day <= 6 || $year == 2014 && $month == "dec" && $day <= 6 || $month == "dec" && $day <= 7){
              print "四緑木星<br />sub is 8<br />最大吉方 9 相星 1,3 <br /> 傾斜 1 同会 9";
            } else if ($year == 1960 && $month == "dec" && $day >= 7 || $year == 1969 && $month == "dec" && $day >= 7 || $year == 1996 && $month == "dec" && $day >= 7 || $year == 2005 && $month == "dec" && $day >= 7 || $year == 2014 && $month == "dec" && $day >= 7 || $month == "dec" && $day >= 8){
              print "四緑木星<br />sub is 7<br />最大吉方 1 相星 3,9 <br /> 傾斜 2 同会 1";
            } 
          break;

          case '2024':
          case '2015':
          case '2006':
          case '1997':
          case '1988':
          case '1979':
          case '1970':
          case '1961':
          case '1952':
          case '1943':
          case '1934':
          case '1925':

            if ($year == 1943 && $month == "jan" && $day <= 7 || $year == 1952 && $month == "jan" && $day <= 7 || $year == 1988 && $month == "jan" && $day <= 7 || $month == "jan" && $day <= 6){
              print "四緑木星<br />sub is 7<br />最大吉方 1 相星 3,9 <br /> 傾斜 2 同会 1";
            } else if ($year == 1943 && $month == "jan" && $day >= 8 || $year == 1952 && $month == "jan" && $day >= 8 || $year == 1988 && $month == "jan" && $day >= 8 || $month == "jan" && $day >= 7 ){
              print "四緑木星<br /> sub is 6<br />最大吉方 1 相星 3,9 <br /> 傾斜 3 同会 2";
            } else if ($year == 1961 && $month == "feb" && $day <= 4 || $year == 1997 && $month == "feb" && $day <= 4 || $year == 2006 && $month == "feb" && $day <= 4 || $month == "feb" && $day <= 5) {
              print "四緑木星<br /> sub is 6<br />最大吉方 1 相星 3,9 <br /> 傾斜 3 同会 2";
            } else if ($year == 1961 && $month == "feb" && $day >= 5 || $year == 1997 && $month == "feb" && $day >= 5 || $year == 2006 && $month == "feb" && $day >= 5 || $month == "feb" && $day >= 6){
              print "三碧木星<br />sub is 5<br />最大吉方 9 相星 1,4 <br /> 傾斜 3 同会 1";
            } else if ($year == 1943 && $month == "mar" && $day <= 4 || $year == 1952 && $month == "mar" && $day <= 4 || $month == "mar" && $day <= 3) {
              print "三碧木星<br />sub is 5<br />最大吉方 9 相星 1,4 <br /> 傾斜 3 同会 1";
            } else if ($year == 1943 && $month == "mar" && $day >= 5 || $year == 1952 && $month == "mar" && $day >= 5 || $month == "mar" && $day >= 4){
              print "三碧木星<br />sub is 4<br />最大吉方 1,9 相星 none <br /> 傾斜 4 同会 2";
            } else if ($year == 1988 && $month == "apr" && $day <= 4 || $year == 1997 && $month == "apr" && $day <= 4 || $year == 2024 && $month == "apr" && $day <= 4 || $month == "apr" && $day <= 5){
              print "三碧木星<br />sub is 4<br />最大吉方 1,9 相星 none <br /> 傾斜 4 同会 2";
            } else if ($year == 1988 && $month == "apr" && $day >= 5 || $year == 1997 && $month == "apr" && $day >= 5 || $year == 2024 && $month == "apr" && $day >= 5 || $month == "apr" && $day >= 6){
              print "三碧木星<br />sub is 3<br />最大吉方 1,9 相星 4 <br /> 傾斜 4 同会 2";
            } else if ($year == 1943 && $month == "may" && $day <= 5 || $year == 1988 && $month == "may" && $day <= 3 || $year == 2024 && $month == "may" && $day <= 3 || $month == "may" && $day <= 4){
              print "三碧木星<br />sub is 3<br />最大吉方 1,9 相星 4 <br /> 傾斜 4 同会 2";
            } else if ($year == 1943 && $month == "may" && $day >= 6 || $year == 1988 && $month == "may" && $day >= 4 || $year == 2024 && $month == "may" && $day >= 4 || $month == "may" && $day >= 5){
              print "三碧木星<br />sub is 2<br />最大吉方 9 相星 1,4 <br /> 傾斜 6 同会 4";
            } else if ($year == 1952 && $month == "jun" && $day <= 4 || $year == 1988 && $month == "jun" && $day <= 4 || $year == 1997 && $month == "jun" && $day <= 4 || $year == 2024 && $month == "jun" && $day <= 4 || $month == "jun" && $day <= 5){
              print "三碧木星<br />sub is 2<br />最大吉方 9 相星 1,4 <br /> 傾斜 6 同会 4";
            } else if ($year == 1952 && $month == "jun" && $day >= 5 || $year == 1988 && $month == "jun" && $day >= 5 || $year == 1997 && $month == "jun" && $day >= 5 || $year == 2024 && $month == "jun" && $day >= 5 || $month == "jun" && $day >= 6){
              print "三碧木星<br />sub is 1<br />最大吉方 4 相星 9 <br /> 傾斜 7 同会 5";
            } else if ($year == 1988 && $month == "jul" && $day <= 4 || $year == 2024 && $month == "jul" && $day <= 4 || $month == "jul" && $day <= 5){
              print "三碧木星<br />sub is 1<br />最大吉方 4 相星 9 <br /> 傾斜 7 同会 5";
            } else if ($year == 1988 && $month == "jul" && $day >= 5 || $year == 2024 && $month == "jul" && $day >= 5 || $month == "jul" && $day >= 6){
              print "三碧木星<br />sub is 9<br />最大吉方 4 相星 1 <br /> 傾斜 8 同会 6";
            } else if ($year == 1925 && $month == "aug" && $day <= 7 || $year == 1934 && $month == "aug" && $day <= 7 || $year == 1943 && $month == "aug" && $day <= 7 || $year == 1979 && $month == "aug" && $day <= 7 || $year == 2024 && $month == "aug" && $day <= 5 || $month == "aug" && $day <= 6){
              print "三碧木星<br />sub is 9<br />最大吉方 4 相星 1 <br /> 傾斜 8 同会 6";
            } else if ($year == 1925 && $month == "aug" && $day >= 8 || $year == 1934 && $month == "aug" && $day >= 8 || $year == 1943 && $month == "aug" && $day >= 8 || $year == 1979 && $month == "aug" && $day >= 8 || $year == 2024 && $month == "aug" && $day >= 6 || $month == "aug" && $day >= 7){
              print "三碧木星<br />sub is 8<br />最大吉方 9 相星 1,4 <br /> 傾斜 9 同会 7";
            } else if ($year == 1952 && $month == "sep" && $day <= 6 || $year == 1988 && $month == "sep" && $day <= 6 || $year == 1997 && $month == "sep" && $day <= 6 || $year == 2024 && $month == "sep" && $day <= 6 || $month == "sep" && $day <= 7 ){
              print "三碧木星<br />sub is 8<br />最大吉方 9 相星 1,4 <br /> 傾斜 9 同会 7";
            } else if ($year == 1952 && $month == "sep" && $day >= 7 || $year == 1988 && $month == "sep" && $day >= 7 || $year == 1997 && $month == "sep" && $day >= 7 || $year == 2024 && $month == "sep" && $day >= 7 || $month == "sep" && $day >= 8){
              print "三碧木星<br />sub is 7<br />最大吉方 1 相星 4,9 <br /> 傾斜 1 同会 8";
            } else if ($year == 1988 && $month == "oct" && $day <= 6 || $year == 1997 && $month == "oct" && $day <= 6 || $year == 2024 && $month == "oct" && $day <= 6 || $month == "oct" && $day <= 7){
              print "三碧木星<br />sub is 7<br />最大吉方 1 相星 4,9 <br /> 傾斜 1 同会 8";
            } else if ($year == 1988 && $month == "oct" && $day >= 7 || $year == 1997 && $month == "oct" && $day >= 7 || $year == 2024 && $month == "oct" && $day >= 7 || $month == "oct" && $day >= 8){
              print "三碧木星<br />sub is 6<br />最大吉方 1 相星 4,9 <br /> 傾斜 2 同会 9";
            } else if ($year == 1925 && $month == "nov" && $day <= 8 || $year == 1934 && $month == "nov" && $day <= 8 || $year == 1943 && $month == "nov" && $day <= 8 || $year == 1970 && $month == "nov" && $day <= 8 || $year == 1979 && $month == "nov" && $day <= 8 || $month == "nov" && $day <= 7){
              print "三碧木星<br />sub is 6<br />最大吉方 1 相星 4,9 <br /> 傾斜 2 同会 9";
            } else if ($year == 1925 && $month == "nov" && $day >= 9 || $year == 1934 && $month == "nov" && $day >= 9 || $year == 1943 && $month == "nov" && $day >= 9 || $year == 1970 && $month == "nov" && $day >= 9 || $year == 1979 && $month == "nov" && $day >= 9 || $month == "nov" && $day >= 8){
              print "三碧木星<br />sub is 5<br />最大吉方 9 相星 1,4 <br /> 傾斜 3 同会 1";
            } else if ($year ==1952 && $month == "dec" && $day <= 6 || $year ==1988 && $month == "dec" && $day <= 6 || $year ==1997 && $month == "dec" && $day <= 6 || $year == 2006 && $month == "dec" && $day <= 6 || $year == 2024 && $month == "dec" && $day <= 6 || $month == "dec" && $day <= 7){
              print "三碧木星<br />sub is 5<br />最大吉方 9 相星 1,4 <br /> 傾斜 3 同会 1";
            } else if ($year == 1952 && $month == "dec" && $day >= 7 || $year == 1988 && $month == "dec" && $day >= 7 || $year == 1997 && $month == "dec" && $day >= 7 || $year == 2006 && $month == "dec" && $day >= 7 || $year == 2024 && $month == "dec" && $day >= 7 || $month == "dec" && $day >= 8){
              print "三碧木星<br />sub is 4<br />最大吉方 1,9 相星 none <br /> 傾斜 4 同会 2";
            } 

          break;

          case '2025':
          case '2016':
          case '2007':
          case '1998':
          case '1989':
          case '1980':
          case '1971':
          case '1962':
          case '1953':
          case '1944':
          case '1935':
          case '1926':

            if ($year == 1935 && $month == "jan" && $day <= 7 || $year == 1944 && $month == "jan" && $day <= 7 || $year == 1980 && $month == "jan" && $day <= 7 || $month == "jan" && $day <= 6){
              print "三碧木星<br />sub is 4<br />最大吉方 1,9 相星 none <br /> 傾斜 4 同会 2";
            } else if ($year == 1935 && $month == "jan" && $day >= 8 || $year == 1944 && $month == "jan" && $day >= 8 || $year == 1980 && $month == "jan" && $day >= 8 || $month == "jan" && $day >= 7){
              print "三碧木星<br /> sub is 3<br />最大吉方 1,9 相星 4 <br /> 傾斜 4 同会 2";
            } else if ($year == 1989 && $month == "feb" && $day <= 4 || $year == 1998 && $month == "feb" && $day <= 4 || $year == 2025 && $month == "feb" && $day <= 4 || $month == "feb" && $day <= 5 ){
              print "三碧木星<br /> sub is 3<br />最大吉方 1,9 相星 4 <br /> 傾斜 4 同会 2";
            } else if ($year == 1989 && $month == "feb" && $day >= 5 || $year == 1998 && $month == "feb" && $day >= 5 || $year == 2025 && $month == "feb" && $day >= 5 || $month == "feb" && $day >= 6){
              print "二黒土星<br />sub is 2<br />最大吉方 7,8 相星 9,6 <br /> 傾斜 1 同会 7";
            } else if ($year == 1935 && $month == "mar" && $day <= 4 || $year == 1944 && $month == "mar" && $day <= 4 || $year == 1980 && $month == "mar" && $day <= 4 || $year == 2025 && $month == "mar" && $day <= 2 || $month == "mar" && $day <= 3) {
              print "二黒土星<br />sub is 2<br />最大吉方 7,8 相星 9,6 <br /> 傾斜 1 同会 7";
            } else if ($year == 1935 && $month == "mar" && $day >= 5 || $year == 1944 && $month == "mar" && $day >= 5 || $year == 1980 && $month == "mar" && $day >= 5 || $year == 2025 && $month == "mar" && $day >= 5 || $month == "mar" && $day >= 4){
              print "二黒土星<br />sub is 1<br />最大吉方 6,7 相星 8,9 <br /> 傾斜 6 同会 3";
            } else if ($year == 1980 && $month == "apr" && $day <= 4 || $year == 1989 && $month == "apr" && $day <= 4 || $year == 2016 && $month == "apr" && $day <= 4 || $year == 2025 && $month == "apr" && $day <= 4 || $month == "apr" && $day <= 5){
              print "二黒土星<br />sub is 1<br />最大吉方 6,7 相星 8,9 <br /> 傾斜 6 同会 3";
            } else if ($year == 1980 && $month == "apr" && $day >= 5 || $year == 1989 && $month == "apr" && $day >= 5 || $year == 2016 && $month == "apr" && $day >= 5 || $year == 2025 && $month == "apr" && $day >= 5 || $month == "apr" && $day >= 6){
              print "二黒土星<br />sub is 9<br />最大吉方 8 相星 6,7 <br /> 傾斜 7 同会 4";
            } else if ($year == 1935 && $month == "may" && $day <= 5 || $year == 2016 && $month == "may" && $day <= 3 || $year == 2025 && $month == "may" && $day <= 3 || $month == "may" && $day <= 4){
              print "二黒土星<br />sub is 9<br />最大吉方 8 相星 6,7 <br /> 傾斜 7 同会 4";
            } else if ($year == 1935 && $month == "may" && $day >= 6 || $year == 2016 && $month == "may" && $day >= 4 || $year == 2025 && $month == "may" && $day >= 4 || $month == "may" && $day >= 5){
              print "二黒土星<br />sub is 8<br />最大吉方 9,6,7 相星 none <br /> 傾斜 8 同会 5";
            } else if ($year == 1980 && $month == "jun" && $day <= 4 || $year == 1989 && $month == "jun" && $day <= 4 || $year == 2016 && $month == "jun" && $day <= 4 || $year == 2025 && $month == "jun" && $day <= 4 || $month == "jun" && $day <= 5){
              print "二黒土星<br />sub is 8<br />最大吉方 9,6,7 相星 none <br /> 傾斜 8 同会 5";
            } else if ($year == 1980 && $month == "jun" && $day >= 5 || $year == 1989 && $month == "jun" && $day >= 5 || $year == 2016 && $month == "jun" && $day >= 5 || $year == 2025 && $month == "jun" && $day >= 5 || $month == "jun" && $day >= 6){
              print "二黒土星<br />sub is 7<br />最大吉方 6,8 相星 9 <br /> 傾斜 9 同会 6";
            } else if ($year == 1935 &&  $month == "jul" && $day <= 6 || $year == 1980 &&  $month == "jul" && $day <= 4 || $year == 2016 &&  $month == "jul" && $day <= 4 || $year == 2025 &&  $month == "jul" && $day <= 4 || $month == "jul" && $day <= 5){
              print "二黒土星<br />sub is 7<br />最大吉方 6,8 相星 9 <br /> 傾斜 9 同会 6";
            } else if ($year == 1935 && $month == "jul" && $day >= 7 || $year == 1980 && $month == "jul" && $day >= 5 || $year == 2016 && $month == "jul" && $day >= 5 || $year == 2025 && $month == "jul" && $day >= 5 || $month == "jul" && $day >= 6){
              print "二黒土星<br />sub is 6<br />最大吉方 7,8 相星 9 <br /> 傾斜 1 同会 7";
            } else if ($year == 1926 && $month == "aug" && $day <= 7 || $year == 1935 && $month == "aug" && $day <= 7 || $year == 1980 && $month == "aug" && $day <= 7 || $month == "aug" && $day <= 6){
              print "二黒土星<br />sub is 6<br />最大吉方 7,8 相星 9 <br /> 傾斜 1 同会 7";
            } else if ($year == 1926 && $month == "aug" && $day >= 8 || $year == 1935 && $month == "aug" && $day >= 8 || $year == 1980 && $month == "aug" && $day >= 8 || $month == "aug" && $day >= 7){
              print "二黒土星<br />sub is 5<br />最大吉方 9,8,6,7 相星 none <br /> 傾斜 2 同会 8";
            } else if ($year == 1980 && $month == "sep" && $day <= 6 || $year == 1989 && $month == "sep" && $day <= 6 || $year == 2016 && $month == "sep" && $day <= 6 || $year == 2025 && $month == "sep" && $day <= 6 || $month == "sep" && $day <= 7){
              print "二黒土星<br />sub is 5<br />最大吉方 9,8,6,7 相星 none <br /> 傾斜 2 同会 8";
            } else if ($year == 1980 && $month == "sep" && $day >= 7 || $year == 1989 && $month == "sep" && $day >= 7 || $year == 2016 && $month == "sep" && $day >= 7 || $year == 2025 && $month == "sep" && $day >= 7 || $month == "sep" && $day >= 8){
              print "二黒土星<br />sub is 4<br />最大吉方 9 相星 6,7,8 <br /> 傾斜 3 同会 9";
            } else if ($year == 1980 && $month == "oct" && $day <= 6 || $year == 2016 && $month == "oct" && $day <= 6 || $year == 2025 && $month == "oct" && $day <= 6 || $month == "oct" && $day <= 7){
              print "二黒土星<br />sub is 4<br />最大吉方 9 相星 6,7,8 <br /> 傾斜 3 同会 9";
            } else if ($year == 1980 && $month == "oct" && $day >= 7 || $year == 2016 && $month == "oct" && $day >= 7 || $year == 2025 && $month == "oct" && $day >= 7 || $month == "oct" && $day >= 8){
              print "二黒土星<br />sub is 3<br />最大吉方 9 相星 6,7,8 <br /> 傾斜 4 同会 1";
            } else if ($year == 1926 && $month == "nov" && $day <= 8 || $year == 1935 && $month == "nov" && $day <= 8 || $year == 1962 && $month == "nov" && $day <= 8 || $year == 1971 && $month == "nov" && $day <= 8 || $year == 2007 && $month == "nov" && $day <= 8 || $month == "nov" && $day <= 7){
              print "二黒土星<br />sub is 3<br />最大吉方 9 相星 6,7,8 <br /> 傾斜 4 同会 1";
            } else if ($year == 1926 && $month == "nov" && $day >= 9 || $year == 1935 && $month == "nov" && $day >= 9 || $year == 1962 && $month == "nov" && $day >= 9 || $year == 1971 && $month == "nov" && $day >= 9 || $year == 2007 && $month == "nov" && $day >= 9 || $month == "nov" && $day >= 8){
              print "二黒土星<br />sub is 2<br />最大吉方 7,8 相星 9,6 <br /> 傾斜 1 同会 7";
            } else if ($year == 1944 && $month == "dec" && $day <= 6 || $year == 1980 && $month == "dec" && $day <= 6 || $year == 1989 && $month == "dec" && $day <= 6 || $year == 2016 && $month == "dec" && $day <= 6 || $year == 2025 && $month == "dec" && $day <= 6 || $month == "dec" && $day <= 7){
              print "二黒土星<br />sub is 2<br />最大吉方 7,8 相星 9,6 <br /> 傾斜 1 同会 7";
            } else if ($year == 1944 && $month == "dec" && $day >= 7 || $year == 1980 && $month == "dec" && $day >= 7 || $year == 1989 && $month == "dec" && $day >= 7 || $year == 2016 && $month == "dec" && $day >= 7 || $year == 2025 && $month == "dec" && $day >= 7 || $month == "dec" && $day >= 8){
              print "二黒土星<br />sub is 1<br />最大吉方 6,7 相星 8,9 <br /> 傾斜 6 同会 3";
            } 
            break;

          case '2026':
          case '2017':
          case '2008':
          case '1999':
          case '1990':
          case '1981':
          case '1963':
          case '1954':
          case '1945':
          case '1936':
          case '1927':

            if ($year == 1927 && $month == "jan" && $day <= 7 || $year == 1936 && $month == "jan" && $day <= 7 || $year == 1972 && $month == "jan" && $day <= 7 || $month == "jan" && $day <= 6){
              print "二黒土星<br />sub is 1<br />最大吉方 6,7 相星 8,9 <br /> 傾斜 6 同会 3";
            } else if ($year == 1927 && $month == "jan" && $day >= 8 || $year == 1936 && $month == "jan" && $day >= 8 || $year == 1972 && $month == "jan" && $day >= 8 || $month == "jan" && $day >= 7){
              print "二黒土星<br /> sub is 9<br />最大吉方 8 相星 6,7 <br /> 傾斜 7 同会 4";
            } else if ($year == 1981 && $month == "feb" && $day <= 4 || $year == 1990 && $month == "feb" && $day <= 4 || $year == 2017 && $month == "feb" && $day <= 4 || $year == 2026 && $month == "feb" && $day <= 4 || $month == "feb" && $day <= 5){
              print "二黒土星<br /> sub is 9<br />最大吉方 8 相星 6,7 <br /> 傾斜 7 同会 4";
            } else if ($year == 1981 && $month == "feb" && $day >= 5 || $year == 1990 && $month == "feb" && $day >= 5 || $year == 2017 && $month == "feb" && $day >= 5 || $year == 2026 && $month == "feb" && $day >= 5 || $month == "feb" && $day >= 6){
              print "一白水星<br />sub is 8<br />最大吉方 6,7 相星 3,4 <br /> 傾斜 7 同会 3";
            } else if ($year == 1927 && $month == "mar" && $day <= 4 || $year == 1936 && $month == "mar" && $day <= 4 || $year == 1972 && $month == "mar" && $day <= 4 || $month == "mar" && $day <= 3) {
              print "一白水星<br />sub is 8<br />最大吉方 6,7 相星 3,4 <br /> 傾斜 7 同会 3";
            } else if ($year == 1927 && $month == "mar" && $day >= 5 || $year == 1936 && $month == "mar" && $day >= 5 || $year == 1972 && $month == "mar" && $day >= 5 || $month == "mar" && $day >= 4){
              print "一白水星<br />sub is 7<br />最大吉方 6 相星 3,4 <br /> 傾斜 8 同会 4";
            } else if ($year == 1972 && $month == "apr" && $day <= 4 || $year == 2008 && $month == "apr" && $day <= 4 || $year == 2017 && $month == "apr" && $day <= 4 || $year == 2026 && $month == "apr" && $day <= 4 || $month == "apr" && $day <= 5){
              print "一白水星<br />sub is 7<br />最大吉方 6 相星 3,4 <br /> 傾斜 8 同会 4";
            } else if ($year == 1972 && $month == "apr" && $day >= 5 || $year == 2008 && $month == "apr" && $day >= 5 || $year == 2017 && $month == "apr" && $day >= 5 || $year == 2026 && $month == "apr" && $day >= 5 || $month == "apr" && $day >= 6){
              print "一白水星<br />sub is 6<br />最大吉方 7 相星 3,4 <br /> 傾斜 9 同会 5";
            } else if ($year == 1927 && $month == "may" && $day <= 5 || $year == 2008 && $month == "may" && $day <= 3 || $year == 2017 && $month == "may" && $day <= 3 || $month == "may" && $day <= 4){
              print "一白水星<br />sub is 6<br />最大吉方 7 相星 3,4 <br /> 傾斜 9 同会 5";
            } else if ($year == 1927 && $month == "may" && $day >= 6 || $year == 2008 && $month == "may" && $day >= 4 || $year == 2017 && $month == "may" && $day >= 4 || $month == "may" && $day >= 5){
              print "一白水星<br />sub is 5<br />最大吉方 6,7 相星 3,4 <br /> 傾斜 1 同会 6";
            } else if ($year == 1972 && $month == "jun" && $day <= 4 || $year == 1981 && $month == "jun" && $day <= 4 || $year == 2008 && $month == "jun" && $day <= 4 || $year == 2017 && $month == "jun" && $day <= 4 || $year == 2026 && $month == "jun" && $day <= 4 || $month == "jun" && $day <= 5){
              print "一白水星<br />sub is 5<br />最大吉方 6,7 相星 3,4 <br /> 傾斜 1 同会 6";
            } else if ($year == 1972 && $month == "jun" && $day >= 5 || $year == 1981 && $month == "jun" && $day >= 5 || $year == 2008 && $month == "jun" && $day >= 5 || $year == 2017 && $month == "jun" && $day >= 5 || $year == 2026 && $month == "jun" && $day >= 5 || $month == "jun" && $day >= 6){
              print "一白水星<br />sub is 4<br />最大吉方 3 相星 6,7 <br /> 傾斜 2 同会 7";
            } else if ($year == 1927 && $month == "jul" && $day <= 6 || $year == 1972 && $month == "jul" && $day <= 4 || $year == 2008 && $month == "jul" && $day <= 4 || $year == 2017 && $month == "jul" && $day <= 4 || $month == "jul" && $day <= 5){
              print "一白水星<br />sub is 4<br />最大吉方 3 相星 6,7 <br /> 傾斜 2 同会 7";
            } else if ($year == 1927 && $month == "jul" && $day >= 7 || $year == 1972 && $month == "jul" && $day >= 5 || $year == 2008 && $month == "jul" && $day >= 5 || $year == 2017 && $month == "jul" && $day >= 5 || $month == "jul" && $day >= 6){
              print "一白水星<br />sub is 3<br />最大吉方 4 相星 6,7 <br /> 傾斜 3 同会 8";
            } else if ($year == 1927 && $month == "aug" && $day <= 7 || $year == 1954 && $month == "aug" && $day <= 7 || $year == 1963 && $month == "aug" && $day <= 7 || $month == "aug" && $day <= 6){
              print "一白水星<br />sub is 3<br />最大吉方 4 相星 6,7 <br /> 傾斜 3 同会 8";
            } else if ($year == 1927 && $month == "aug" && $day >= 8 || $year == 1954 && $month == "aug" && $day >= 8 || $year == 1963 && $month == "aug" && $day >= 8 || $month == "aug" && $day >= 7){
              print "一白水星<br />sub is 2<br />最大吉方 6,7 相星 3,4 <br /> 傾斜 4 同会 9";
            } else if ($year == 1972 && $month == "sep" && $day <= 6 || $year == 1981 && $month == "sep" && $day <= 6 || $year == 2008 && $month == "sep" && $day <= 6 || $year == 2017 && $month == "sep" && $day <= 6 || $year == 2026 && $month == "sep" && $day <= 6 || $month == "sep" && $day <= 7){
              print "一白水星<br />sub is 2<br />最大吉方 6,7 相星 3,4 <br /> 傾斜 4 同会 9";
            } else if ($year == 1972 && $month == "sep" && $day >= 7 || $year == 1981 && $month == "sep" && $day >= 7 || $year == 2008 && $month == "sep" && $day >= 7 || $year == 2017 && $month == "sep" && $day >= 7 || $year == 2026 && $month == "sep" && $day >= 7 || $month == "sep" && $day >= 8){
              print "一白水星<br />sub is 1<br />最大吉方 3,4 相星 6,7 <br /> 傾斜 6 同会 2";
            } else if ($year == 1927 && $month == "oct" && $day <= 8 || $year == 1972 && $month == "oct" && $day <= 6 || $year == 2008 && $month == "oct" && $day <= 6 || $year == 2017 && $month == "oct" && $day <= 6 || $year == 2026 && $month == "oct" && $day <= 6 || $month == "oct" && $day <= 7){
              print "一白水星<br />sub is 1<br />最大吉方 3,4 相星 6,7 <br /> 傾斜 6 同会 2";
            } else if ($year == 1927 && $month == "oct" && $day >= 9 || $year == 1972 && $month == "oct" && $day >= 7 || $year == 2008 && $month == "oct" && $day >= 7 || $year == 2017 && $month == "oct" && $day >= 7 || $year == 2026 && $month == "oct" && $day >= 7 || $month == "oct" && $day >= 8){  
              print "一白水星<br />sub is 9<br />最大吉方 3,4 相星 6,7 <br /> 傾斜 6 同会 2";
            } else if ($year == 1927 && $month == "nov" && $day <= 8 || $year == 1945 && $month == "nov" && $day <= 8 || $year == 1954 && $month == "nov" && $day <= 8 || $year == 1963 && $month == "nov" && $day <= 8 || $year == 1999 && $month == "nov" && $day <= 8 || $month == "nov" && $day <= 7){
              print "一白水星<br />sub is 9<br />最大吉方 3,4 相星 6,7 <br /> 傾斜 6 同会 2";
            } else if ($year == 1927 && $month == "nov" && $day >= 9 || $year == 1945 && $month == "nov" && $day >= 9 || $year == 1954 && $month == "nov" && $day >= 9 || $year == 1963 && $month == "nov" && $day >= 9 || $year == 1999 && $month == "nov" && $day >= 9 || $month == "nov" && $day >= 8){
              print "一白水星<br />sub is 8<br />最大吉方 6,7 相星 3,4 <br /> 傾斜 7 同会 3";
            } else if ($year == 1927 && $month == "dec" && $day <= 7 || $year == 1945 && $month == "dec" && $day <= 7 || $year == 1954 && $month == "dec" && $day <= 7 || $year == 1963 && $month == "dec" && $day <= 7 || $year == 1990 && $month == "dec" && $day <= 7 || $year == 1999 && $month == "dec" && $day <= 7 || $month == "dec" && $day <= 6){
              print "一白水星<br />sub is 8<br />最大吉方 6,7 相星 3,4 <br /> 傾斜 7 同会 3";
            } else if ($year == 1927 && $month == "dec" && $day >= 8 || $year == 1945 && $month == "dec" && $day >= 8 || $year == 1954 && $month == "dec" && $day >= 8 || $year == 1963 && $month == "dec" && $day >= 8 || $year == 1990 && $month == "dec" && $day >= 8 || $year == 1999 && $month == "dec" && $day >= 8 || $month == "dec" && $day >= 7){
              print "一白水星<br />sub is 7<br />最大吉方 6 相星 3,4 <br /> 傾斜 8 同会 4";
            } 
            break;
          
          default;
          break;
        }

  ?>

</body>
</html>
