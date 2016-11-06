<html>
<head>
	<title>html实现博客网页</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="box-stress3">
<h1>陈虎的<span style="color:red;">csdn</span>博客</h6>
<h6><em>爱一个人最好的方式， 是经营好自己， 给对方一个优质的爱人。</em></h2>
<hr/>
<div id="box-stress1">
<span style="color: red;font-size:20px">个人资料</span>
<h2>昵称：<em>陈虎</em></h2>
<ul>
    <li>访问：0次</li>
    <li>积分：1085 </li> 
    <li>排名：千里之外</li>
</ul>
<hr/>
<ul>
    <li>原创：45篇</li>
    <li>转载：160篇</li>
    <li>译文：6篇</li>
    <li>评论：3条</li>
</ul>
<hr/>
<a href="http://www.baidu.com">点击搜索相关信息</a>
</div>
<div id="box-stress2"><h2 style="font-size: 50px;">若何用<em style="color:red">html</em>与<em style="color:red">css</em>制作网页</h2>
<hr/>
<p style="text-indent:2em;">学习web前端开发基础技术需要掌握：HTML、CSS、JavaScript语言。下面我们就来了解下这三门技术都是用来实现什么的：</p>

<p style="text-indent:2em;">1. HTML是网页内容的载体。内容就是网页制作者放在页面上想要让用户浏览的信息，可以包含文字、图片、视频等。</p>

<p style="text-indent:2em;">2. CSS样式是表现。就像网页的外衣。比如，标题字体、颜色变化，或为标题加入背景图片、边框等。所有这些用来改变内容外观的东西称之为表现。</p>
<p style="text-indent:2em;">3. JavaScript是用来实现网页上的特效效果。如：鼠标滑过弹出下拉菜单。或鼠标滑过表格的背景颜色改变。还有焦点新闻（新闻图片）的轮换。可以这么理解，有动画的，有交互的一般都是用JavaScript来实现的。
</p>
<hr/>
<h3 >源代码体验</h3>
<pre>
	/*字符串初始化为0；转换方式：0-1，1-01；第一次1；第二次01；第三次101*/
#include<iostream.h>
	struct node
	{
		int data;
		node* next;
	};
void main()
{
	node*s;
	node *p=new node;
	p->data=0;
	p->next=NULL;
	cout<<"变换次数n:";
	int n;
	cin>>n;
	for(int i=0;i<n;i++)
	{node* q=p;
		while(q!=NULL)
		{
			if(q->data==0)
			{
				q->data=1;
				//cout<<q->data;
				q=q->next;
			}
			else
			if(q->data=1)
			{
				q->data=0;
			    s=new node;
			    s->data=1;
			    s->next=q->next;
				q->next=s;
			    q=q->next;
				q=q->next;
			}
		}
	}
	node *d=p;
	cout<<"转换后的字符串"<<endl;
	while(d)
	{cout<<d->data;
	d=d->next;}
	cout<<endl
</pre>  
<hr/>
<div id="box-stress4">
	<h3>同类文章推荐</h3>
	<hr/>
	<table>
  <tbody>
    <tr>
      <th>博主</th>
      <th>csdn排行</th>
      <th>文章量</th>
      <th style=" width: 200px; height: 20px;">文章名</th>>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td style=" width: 200px; height: 20px;"></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td style=" width: 200px; height: 20px;"></td>
    </tr>
    <tr>
        <td></td>
         <td></td>
          <td></td>
          <td style=" width: 200px; height: 20px;"></td>
    </tr>
    <tr>
        <td></td>
         <td></td>
          <td></td>
          <td style=" width: 200px; height: 20px;"></td>
    </tr>
    <tr>
        <td></td>
         <td></td>
          <td></td>
          <td style=" width: 200px; height: 20px;"></td>
    </tr>
    <tr>
        <td></td>
         <td></td>
          <td></td>
          <td style=" width: 200px; height: 20px;"></td>
    </tr>
    <tr>
        <td></td>
         <td></td>
          <td></td>
          <td style=" width: 200px; height: 20px;"></td>
    </tr>
    <tr>
        <td></td>
         <td></td>
          <td></td>
          <td style=" width: 200px; height: 20px;"></td>
    </tr>
  </tbody>
</table>
</div>
</div>
<div id="box-stress1">
<ul><span style="color: red;font-size:20px;">文章分类</span>
    <li>C++：45篇</li>
    <hr/>
    <li>PHP：160篇</li>
    <hr/>
    <li>JAVA：6篇</li>
    <hr/>
    <li>CSS：160篇</li>
    <hr/>
    <li>HTML：150篇</li>
    <hr/>
</ul>
</div>
<div id="box-stress1">
	<span style="color: red;font-size:20px;">阅读排行</span>
	<ul>
	<li>C++</li>
	<hr/>
    <li>PHP</li>
   <hr/>
    <li>JAVA</li>
   <hr/>
    <li>CSS</li>
    <hr/>
    <li>HTML</li>
    <hr/>
    </ul>
</div>
</div>
</div>
</body>
</html>