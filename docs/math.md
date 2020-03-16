# Mathematical Basis of Freedom Language ( Discrete math)
## Automatic Grammar
FreedomLang={cl.wr, cl.show,int, double, 
do,while,bool,char,if,else,for,func, a-zA-Z}

[S -> cl.wr A](#)<br/>
[A -> cl.show B](#)<br/>
[B -> int C](#)<br/>
[C -> double D](#)<br/>
[D -> do E](#)<br/>
[E -> while F](#)<br/>
[F -> bool T](#)<br/>
[T -> char R](#)<br/>
[R -> if Y](#)<br/>
[Y -> else L](#)<br/>
[L -> for K](#)<br/>
[K -> func U](#)<br/>
[U -> a-zA-Z](#)<br/>
## Determined finite state machine
![](_media/automata.png)<br/>
## Context Free Grammar
<indentificator>::=<'a'...'z'|'A'...'Z'><br/>
<type>::=< int|bool|char|double|func ><br/>
<variable>::=<type|identificator ><br/>
<keywords>::=<cl.show|cl.wr|if|else|do|while><br/>
<statement>::=<keywords|()><br/>
Go back to [Home page](README.md) 
