function result(){

  input=document.getElementById('input').value;
    output=process(input);
  document.getElementById('output').innerHTML=output;
}

function Node(data) {
  this.data = data;
  this.next = null;
}

// Stack implemented using LinkedList
function Stack() {
  this.top = null;
}

Stack.prototype.push = function(data) {
  var newNode = new Node(data);

  newNode.next = this.top; //Special attention
  this.top = newNode;
}

Stack.prototype.pop = function() {
  if (this.top !== null) {
    var topItem = this.top.data;
    this.top = this.top.next;
    return topItem;
  }
  return null;
}

Stack.prototype.size = function() {
  var curr = this.top;
  var c=0;
  while (curr!=null) {
    c++;
    curr = curr.next;
  }
  return c;
}

Stack.prototype.print = function() {
  var curr = this.top;
  while (curr!=null) {
    console.log(curr.data);
    curr = curr.next;
  }
}

var stack=new Stack();
stack.push(4);
stack.push(7);
stack.print();


function cheikh_sign(ch){
   if(ch=='+' || ch=='-' || ch=='*' || ch=='/')return 1;
  return 0;
}

function cheikh_together_sign(st){
 
  for(i=0; i<st.length-1; i++){
    a=st[i];
    b=st[i+1];
      if(cheikh_sign(a)==1 && cheikh_sign(b)==1){
        if((a=='+' || a=='-') &&(b=='+' || b=='-'))continue;
       return 1;
      }
    }
   return 0;
}

function cheikh_bracket(st){
  var bracket="";
  for(i=0; i<st.length; i++){
    var a=st[i];
    if(a==')' || a=='(')bracket+=a;
  }

  q=new Stack();
  for(i=0; i<bracket.length; i++){
    a=bracket[i];
    if(a=='(')q.push(a);
    else{
      if(q.size()==0)return 1;
      q.pop();
    }
  }
  if(q.size()!=0)return 1;

   return 0;
}

function process(st) {
  var stack = new Stack();
  error=cheikh_together_sign(st);
  error=cheikh_bracket(st);
  return error;
}