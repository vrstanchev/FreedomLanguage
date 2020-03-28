setlocal indentexpr=FreeIndent()
finction! FreeIndent()
let line=getline(v:lnum)
let prevNum=prevnonblank(v:lnum-1)
let prev=getline(prevNum)
if prev=~ "{" && prev !~ "}" && line !~ "}" && line !~ ":$"
    return indent(prevNum)+ &tabstop
endif
endfunction
