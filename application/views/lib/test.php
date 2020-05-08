<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="jquery-1.6.1.min.js"></script>
<title></title>
</head>
<body>
    <script language='javascript'>
    //<![CDATA[
    function testAjaxPost() {     
        var options = {'para' : '50'};
     
        $.post('/index.php/testAjax/testPost', options, function(data) {
            alert(data);
        });
    }

    function testAjaxPara() {             
       $.post('/index.php/testAjax/testPara/50', null, function(data) {
         alert(data); 
      });
    } 
    //]]>
    </script>
  
<form id='frm1' method='post'>
 <table border="0">   
 <tr>
  <td>
   <input type='button' id='btnTestPost' value='Post' onclick='testAjaxPost();' />
   <input type='button' id='btnTestPara' value='Para' onclick='testAjaxPara();' />
  </td>
 </tr>
 </table>  
</form>        
</body>
</html>