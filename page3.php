<!DOCTYPE html>
<html>
<head><title>welcome</title>
</head>
<script type="text/javascript">
var timer=3600;
var min=0;
var sec=0;
function startTimer()
{
min=parseInt(timer/60);
sec=parseInt(timer%60);
if(timer<1){
document.fname.submit.click();
}
document.getElementById("time").innerHTML="<b>Time Left:</b>"+min.toString()+":"+sec.toString();
timer--;
setTimeout(function()
{
startTimer();
},1000);
}</script>

<body  onload="startTimer();" bgcolor="#c0c0c0">
<form name="fname" action="ans1.php" method="post">
<h2><u><center>ONLINE TEST</h2></u></center>
<font face="Times New Roman" size=5/>
<div> <centre> [<span id="time"></span>]</centre>
</div>
<p>1.Consider the polynomial p(x)=a0+a1x+a2x2+a3x3+a4x4  where ai!=0,for all i.the minimum number of multiplications needed to evaluate p on an input x is<br><br>
<input type="radio" name="q1" value="a">3<br>
<input type="radio" name="q1" value="b">4<br>
<input type="radio" name="q1" value="c">5<br>
<input type="radio" name="q1" value="d">6<br>
<p>2)Given 4 identical coins out of which one coin is heavy and a pan balance.How many maximum  number of measurements are needed to find the heavy coin?<br><br>
<input type="radio" name="q2" value="a">1<br>
<input type="radio" name="q2" value="b">2<br>
<input type="radio" name="q2" value="c">3<br>
<input type="radio" name="q3" value="d">4<br>
<p>3)You are given a list of 5 integers and these integers are in the range from 1 to 6.There are no duplicates in the list.One of the integers is missing in the list.Which of the following expression would give the missing number.^ is bitwise XOR operator.~ is bitwise NOT operator.Let elements of list can be accessed as list[0],list[1],list[2],list[3],list[4]<br><br>
<input type="radio" name="q3" value="a">list[0]^list[1]^list[2]^list[3]^list[4]<br>
<input type="radio" name="q3" value="b">list[0]^list[1]^list[2]^list[3]^list[4]^1^2^3^4^5^6<br>
       
<input type="radio" name="q3" value="c">list[0]^list[1]^list[2]^list[3]^list[4]^1^2^3^4^5<br>
       
<input type="radio" name="q3" value="d">~(list[0]^list[1]^list[2]^list[3]^list[4])<br>
<p>4) We are  given 9 tasks T1,T2,....T9.The execution of each task requires one unit of time.We can execute one task at a time.Each taskTi has a profit Pi and a deadline di profit Pi is earned if the task  is completed before the end of the dith unit of time.<br><br>
<table border="2">
<tr> <th>TASK </th> <th>T1</th> <th>	T2</th> <th>	T3</th> <th>	T4</th>	<th>T5</th>	<th>T6</th>	<th>T7</th>	<th>T8</th>	<th>T9</th> </tr>
<tr> <th>PROFIT</th>	<th>25</th>	<th>15</th>	<th>20</th>	<th>30</th>	<th>18</th>	<th>18</th>	<th>10</th>	<th>23</th>	<th>16</th></tr>
<tr> <th>DEADLINE</th> <th> 3</th>	<th>7</th>	<th>2</th>	<th>5</th>	<th>3</th>	<th>4</th>	<th>5</th>	<th>2</th>	<th>7</th> </tr>	
</table> <br>
<input type="radio" name="q4" value="a">All tasks are completed<br>
<input type="radio" name="q4" value="b">T5 and T7  are left out<br>
<input type="radio" name="q4" value="c">T1 and T3  are left out<br>
<input type="radio" name="q4" value="d">T1 and T4 are left out<br>
<p>5)Which of the following algorithms is used to find the maximum sum of subarray in an array?<br><br>
<input type="radio" name="q5" value="a">Odds algorithm<br>
<input type="radio" name="q5" value="b">Kabasch algorithm<br>
<input type="radio" name="q5" value="c">Kadane algorithm<br>
<input type="radio" name="q5" value="d">Sukhotin algorithm<br>
<p>6) What is the primary algorithm used in Whatsapp ?<br><br>
<input type="radio" name="q6" value="a">Double Ratchet algorithm<br>
<input type="radio" name="q6" value="b">Kerberos algorithm<br>
<input type="radio" name="q6" value="c">Secure Hash algorithm<br>
<input type="radio" name="q6" value="d">Triple DES algorithm<br>
<p>7)Consider a number where the sum of the squares of its digits will lead to another number and so on until the sum of the square of the number's digits equals  1.
Which of these numbers satisfy this condition?<br><br>
<input type="radio" name="q7" value="a">205<br>
<input type="radio" name="q7" value="b">666<br>
<input type="radio" name="q7" value="c">969<br>
<input type="radio" name="q7" value="d">None of the above<br>
<P>8) Two trains X and Y (80 km from each other) are running towards each other on the same track with a speed of 40km/hr. A bird starts from the train X and travels towards train Y with constant speed of 100km/hr. Once it reaches train Y, it turns and starts moving toward train X. It does this till the two trains collides with each other. Find the total distance traveled by the bird?<br><br>
<input type="radio" name="q8" value="a">80<br>
<input type="radio" name="q8" value="b">100<br>
<input type="radio" name="q8" value="c">40<br>
<input type="radio" name="q8" value="d">85<br>
<p>9)A monkey starts climbing up a tree 20ft tall.Each hour,it hops 3ft and slips back 2ft.How much time would it take the monkey to reach the top?<br><br>
<input type="radio" name="q9" value="a">21hrs<br>
<input type="radio" name="q9" value="b">12 hrs<br>
<input type="radio" name="q9" value="c">18 hrs<br>
<input type="radio" name="q9" value="d">15 hrs<br>
<p>10)Given  15 people standing in a circle where 1st is having sword, find the luckiest  person in a circle,if from 1st soldier who is having a sword each have to kill the next soldier and handover the sword to next soldier,in turn , the soldier will kill the  adjacent soldier and handover the sword to next soldier such that one soldier remains in this war whop is not killed by anyone.<br><br>
<input type="radio" name="q10" value="a">13<br>
<input type="radio" name="q10" value="b">3<br>
<input type="radio" name="q10" value="c">7<br>
<input type="radio" name="q10" value="d">15<br>
11) A single array A[1...MAXSIZE] is used to implement 2 stacks. The two stacks grow from opposite ends of the arrays.<br> Variables TOP1 and TOP2(TOP1 &lt TOP2)point to the location of the topmost element in the each of the stacks.<br>
 If the space is to used efficiently, the condition for "stack full" is <br><br>
<input type="radio" name="q11" value="a"> (TOP1=MAXSIZE/2) and (TOP2=MAXSIZE/2 + 1)<br>
<input type="radio" name="q11" value="b"> TOP1 + TOP2 = MAXSIZE <br>
<input type="radio" name="q11" value="c"> (TOP1 = MAXSIZE/2) or (TOP2=MAXSIZE)<br>
<input type="radio" name="q11" value="d"> TOP1=TOP2 - 1 <br><p>

12) The initial configuration of the queue is a,b,c and d (a is the front end). To get the configuration d,c,b and a, one needs a minimum of <br><br>
<input type="radio" name="q12" value="a"> 3 additions and 2 deletions<br>
<input type="radio" name="q12" value="b"> 2 additions and 3 deletions <br>
<input type="radio" name="q12" value="c"> 4 additions and 3 deletions <br>
<input type="radio" name="q12" value="d"> 3 additions and 3 deletions <br><p>

13) A* search algorithm is originally developed for <br><br>
<input type="radio" name="q13" value="a"> Searching <br>
<input type="radio" name="q13" value="b"> Encryption <br>
<input type="radio" name="q13" value="c"> Graph_Traversal <br>
<input type="radio"" name="q13" value="d"> Scheduling <br>

<p>14)Which among the following algorithm is used in Minimum Spanning Tree?<br><br>
<input type="radio" name="q14" value="a">Mu-Law Algorithm <br>
<input type="radio" name="q14" value="b">Boruvka's algorithm<br>
<input type="radio" name="q14" value="c">A-Law algorithm <br>
<input type="radio" name="q14" value="d">None of the above  <br>

<p>15)The graph algorithm which forms an essential component of the 'make' or 'ant build' used by
programmers and software developers is:<br><br>
<input type="radio" name="q15" value="a"> Flow maximization algorithm <br>
<input type="radio" name="q15" value="b"> Shortest path algorithm <br>
<input type="radio" name="q15" value="c"> Minimum spanning tree algorithm <br>
<input type="radio" name="q15" value="d"> Bipartite matching <br>


<center>
<input type="submit" name="submit" value="SUBMIT">
</center>
</body>
</html>
