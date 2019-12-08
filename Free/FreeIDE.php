<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>FreeIDE</title>
    </head>
    <body id="bd">
        <h1> Среда за разработка на езика Free</h1>
        <img src="http://icons.iconarchive.com/icons/custom-icon-design/mono-general-2/128/cut-icon.png" id="cut">
        <img src="http://icons.iconarchive.com/icons/visualpharm/must-have/128/Paste-icon.png" id="paste"></br>
        <textarea id="txtar" name="txt"></textarea>
        <textarea id="trans" name="tr"></textarea>
    <table>
        <tr>
            <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Braille_A1.svg/100px-Braille_A1.svg.png" id="a">
            </td>
            <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Braille_B2.svg/100px-Braille_B2.svg.png" id="b">
            </td>
            <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Braille_C3.svg/100px-Braille_C3.svg.png" id="c">
            </td>
            <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Braille_D4.svg/100px-Braille_D4.svg.png" id="d">
            </td>
            <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Braille_E5.svg/100px-Braille_E5.svg.png" id="e">
            </td>
            <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9b/Braille_F6.svg/100px-Braille_F6.svg.png" id="f">
            </td>
             <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Braille_G7.svg/100px-Braille_G7.svg.png" id="g">
            </td>
        <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Braille_H8.svg/100px-Braille_H8.svg.png" id="h">
            </td>
        <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Braille_I9.svg/100px-Braille_I9.svg.png" id="i">
            </td>
        <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Braille_J0.svg/100px-Braille_J0.svg.png" id="j">
            </td>
        <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Braille_K_colored.svg/100px-Braille_K_colored.svg.png" id="k">
            </td>
        <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/Braille_L_colored.svg/100px-Braille_L_colored.svg.png" id="l">
            </td>
        <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Braille_M_colored.svg/100px-Braille_M_colored.svg.png" id="m">
            </td>
        </tr>
        <tr>
            <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Braille_N_colored.svg/100px-Braille_N_colored.svg.png" id="n">
            </td>
            <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Braille_O_colored.svg/100px-Braille_O_colored.svg.png" id="o">
            </td>
            <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Braille_P_colored.svg/100px-Braille_P_colored.svg.png" id="p">
            </td>
            <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Braille_Q_colored.svg/100px-Braille_Q_colored.svg.png" id="q">
            </td>
            <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/Braille_R_colored.svg/100px-Braille_R_colored.svg.png" id="r">
            </td>
            <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Braille_S_colored.svg/100px-Braille_S_colored.svg.png" id="s">
            </td>
            <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/Braille_T_colored.svg/100px-Braille_T_colored.svg.png" id="t">
            </td>
            <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Braille_U_colored.svg/100px-Braille_U_colored.svg.png" id="u">
            </td>
            <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Braille_V_colored.svg/100px-Braille_V_colored.svg.png" id="v">
            </td>
            <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Braille_W_colored.svg/100px-Braille_W_colored.svg.png" id="w">
            </td>
            <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Braille_X_colored.svg/100px-Braille_X_colored.svg.png" id="x">
            </td>
            <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Braille_Y_colored.svg/100px-Braille_Y_colored.svg.png" id="y">
            </td>
            <td>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Braille_Z_colored.svg/100px-Braille_Z_colored.svg.png" id="z">
            </td>
        </tr>
    </table>
    <input type="button" value="Запази в .free файл" id="btn1">
    <input type="button" value="Запази в .cpp файл" id="btn2">
    <style>
        #trans{
            float: right;
        }
        #bd{
            width: 100%;
            height: 100%;
        }
    </style>
    <script type="text/javascript">
        var trans=document.getElementById("trans");
        var cut=document.getElementById("cut");
        var paste=document.getElementById("paste");
          var txtar=document.getElementById("txtar");
        var a=document.getElementById("a");
         var b=document.getElementById("b");
          var c=document.getElementById("c");
           var d=document.getElementById("d");
            var e=document.getElementById("e");
             var f=document.getElementById("f");
              var g=document.getElementById("g");
               var h=document.getElementById("h");
                var i=document.getElementById("i");
                 var j=document.getElementById("j");
                  var k=document.getElementById("k");
                   var l=document.getElementById("l");
                    var m=document.getElementById("m");
          var n=document.getElementById("n");
            var o=document.getElementById("o");
              var p=document.getElementById("p");
                var q=document.getElementById("q");
                  var r=document.getElementById("r");
                    var s=document.getElementById("s");
                      var t=document.getElementById("t");
                      var u=document.getElementById("u");
                        var v=document.getElementById("v");
                          var w=document.getElementById("w");
                            var x=document.getElementById("x");
                              var y=document.getElementById("y");
                                var z=document.getElementById("z");
                                a.addEventListener("click",function(){
                                    txtar.value="a";
                                        });   
                                     b.addEventListener("click",function(){
                                    txtar.value="b";
                                    });
                                   c.addEventListener("click",function(){
                                    txtar.value="c";});
                                    d.addEventListener("click",function(){
                                    txtar.value="d";});
                                     e.addEventListener("click",function(){
                                    txtar.value="e";});
                                      f.addEventListener("click",function(){
                                    txtar.value="f";});
                                       g.addEventListener("click",function(){
                                    txtar.value="g";});
                                        h.addEventListener("click",function(){
                                    txtar.value="h";});
                                         i.addEventListener("click",function(){
                                    txtar.value="i";});
                                          j.addEventListener("click",function(){
                                    txtar.value="j";});
                                           k.addEventListener("click",function(){
                                    txtar.value="k";});
                                            l.addEventListener("click",function(){
                                    txtar.value="l";});
                                             m.addEventListener("click",function(){
                                    txtar.value="m";});
                                              n.addEventListener("click",function(){
                                    txtar.value="n";});
                                               o.addEventListener("click",function(){
                                    txtar.value="o";});
                                                p.addEventListener("click",function(){
                                    txtar.value="p";});
                                                 q.addEventListener("click",function(){
                                    txtar.value="q";});
                                                  r.addEventListener("click",function(){
                                    txtar.value="r";});
                                                   s.addEventListener("click",function(){
                                    txtar.value="s";});
                                                    t.addEventListener("click",function(){
                                    txtar.value="t";});
                                                     u.addEventListener("click",function(){
                                    txtar.value="u";});
                                                      v.addEventListener("click",function(){
                                    txtar.value="v";});
                                                       w.addEventListener("click",function(){
                                    txtar.value="w";});
                                                        x.addEventListener("click",function(){
                                    txtar.value="x";});
                                                         y.addEventListener("click",function(){
                                    txtar.value="y";});
                                                          z.addEventListener("click",function(){
                                    txtar.value="z";});
                                                          var val=txtar.value; var cpp=trans.value;
if(val=="program"){
    cpp="#include<iostream> using namespace std; int main(){     }";
}

    </script>
    </body>
</html>    