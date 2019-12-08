{%
#include "lexer.h"
%} 
%%
"cl.wr" return cl.wr
"cl.show" return cl.show
"if" return if
"bool" return bool
"int" return int 
"double" return double
"else" return else
"do" return do 
"true" return true
"false" return false
"for" return for
"while" return while
[a-zA-z][a-zA-z0-9]* return IDENTIFIER
