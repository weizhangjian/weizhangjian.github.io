---
layout:     post
title:      "Java语言快速入门"
subtitle:   " \"编写一次，随处运行！\""
date:       2016-06-13 00:00:00
author:     "JustinWei"
header-img: "img/post-bg-about-java.jpg"
tags:
    - Java
---

> Write once,run anywhere!

### 目 录
{:.no_toc}
* 目录
{:toc}

Java 是一种高级的编程语言，它最初是由 Sun 公司开发并于 1995 年公开发布的。Java 可以在不同的平台上运行，例如：Windows，Mac OS 和不同版本的 Unix。本指南将让你对 Java 有一个彻底的认识与了解。

## 1. Java 基础
{:toc #java-1}

### 1.1 Java 概述
{:toc #java-1-1}

Java 编程语言最初是由太阳计算机系统公司开发的，该公司由 James gosling 于 1995 年创立，它的主要组成部分就是 Java 平台。

截止到 2008 年 12 月，最新发布的 Java 标准版本是第六版（J2SE）。随着 Java 的发展进步和它的广泛流行， Java 做出了很多调整从而适应不同类型的平台。例如： J2EE 是为企业级应用程序设计的， J2ME 是为移动应用程序设计的。

Sun 计算机系统有限公司将新的 J2 版本分别命名为 Java SE、Java EE 和 Java ME。 Java 承诺 “**编写一次，随处运行**”。

Java 是：

* 面向对象的：在 Java 中，所有的东西都是一个对象。 Java 可以很容易的扩展原因就是因为它是基于对象模型的。
* 平台独立的： Java 不像包括 C 和 C++ 语言在内的其他语言，当 Java 被编译时，它并不是编译到特定的机器中，而是用具有平台独立性的字节码编译。这种字节码在网页上是分布式存储的，并且可以再不同的平台通用的虚拟机上运行。
* 简单的：Java 是为了易于学习而设计的。如果你能够理解面向对象程序设计的基本概念，那么你就很容易掌握 Java 了。
* 安全的：由于 Java 的安全特征它可以用来开发防病毒、防干扰的系统。它的身份验证技术是基于公开密钥加密技术的。
体系结构中立的：Java 编译器可以生成一个结构中立的对象文件格式，它能够使被编译过的代码在 Java 运行系统存在的情况下在很多进程中运行。
* 便捷的：由于 Java 的结构中立性以及它的运行不受限制的特征使得它十分便捷， Java 中的编译器是由 ANSI C 语言编写的，它具有很好的接口是因为它是可移植性系统操作接口的子接口。
* 稳健的：Java 主要通过检查编译时间错误以及运行检查来努力消除有错误倾向的情况。
* 多线程的：因为 Java 的多线程性的特征使得它可以用于编写同时执行众多任务的程序。这个特征可以使开发者平稳设计运行交互式应用程序。
* 易于理解的：Java 的字节码可以很容易翻译成本地机器码并且很容易存储于任意位置。这个发展进程很快并且很有分析性，因为他们的联系就像增加和减轻体重的过程。
* 高性能：由于使用了准时编译器，它可以表现出很高的性能。
* 分布式的：Java 是为互联网分布式的结构而设计的。
* 动态的：Java 被认为是比 C 和 C++ 更有活力的语言因为它是为适应动态环境而设计的。Java 程序可以携带大量的运行信息，这些信息可以用来区分对象间的入口问题。

---

### 1.2 Java 环境设置
{:toc #java-1-2}

#### 本地环境设置
{:.no_toc}

1.下载JDK：Java SE 可以从官网[免费下载](http://www.oracle.com/technetwork/java/javase/downloads/index.html)，根据你的系统类型下载相应版本的 Java。

2.安装JDK：然后运行下载好的 jdk-*-*.exe 文件进行安装，按照步骤提示默认安装即可。

3.Windows下设置环境变量：以jdk-8u91-windows-x64.exe为例，JDK安装在 c:\Program Files\java\jdk1.8.0_91下。

> 打开Windows命令提示符DOS窗口，然后分别输入以下代码：
>
> ```cmd
wmic ENVIRONMENT where "name='JAVA_HOME' and UserName='<system>'" delete
wmic ENVIRONMENT create name="JAVA_HOME",username="<system>",VariableValue="C:\Program  Files\Java\jdk1.8.0_91"
wmic ENVIRONMENT where "name='CLASSPATH' and UserName='<system>'" delete
wmic ENVIRONMENT create name="CLASSPATH",username="<system>",VariableValue=".;%JAVA_HOME%\lib\dt.jar;%JAVA_HOME%\lib\tools.jar;%JAVA_HOME%\jre\lib\rt.jar"
wmic ENVIRONMENT where "name='Path' and UserName='<system>'" set VariableValue="%path%;%JAVA_HOME%\bin;%JAVA_HOME%\jre\bin"
```

---

流行的 Java 编辑器：

* [Notepad++](https://notepad-plus-plus.org/)：是在windows下的一个免费的代码编辑器，效率高，可以替代记事本来使用。
* [Eclipse](http://www.eclipse.org/)：这是一款由 eclipse 开源社区开发的 Java 编辑器。

编译运行java程序：

* 用命令提示符DOS窗口，输入`java 程序名`来编译运行程序。
* 用Eclipse的控制台来直接编译运行代码。

---

### 1.3 Java 基本语法
{:toc #java-1-3}

Java 应用程序可以被定义为对象的集合，这些对象通过调用各自的方法来进行通信。下面让我们具体看一看类，对象，方法，实体变量是什么含义。

* 对象：**对象是类的一个实例，有状态（变量）和行为（方法）。**  
       例如：狗有它的状态——颜色，名字，品种，同时也有行为——摇尾巴，汪汪叫，吃东西。
* 类：**描述对象所支持类型的行为和状态的模板或蓝图。**
* 方法：**是一种基本的行为，在方法中，可以编写逻辑，操纵数据，执行动作**。类中可以包含很多方法。
* 实体变量：每个对象都有它的特殊的实体变量的集合，**一个对象的状态是由那些实体变量所被赋的值所决定的。**

#### 基本语法
{:.no_toc}

关于 Java 程序，记住一下几点很重要。

* 大小写敏感性：Java 是一种大小写敏感的语言，这就意味着 Hello 和 hello 在 Java 中代表不同的意思。
* 类的命名：所有类的名称首字母必须大写。  
      如果类名称中包含几个单词，那么每个单词的首字母都要大写。  
      例如类 `MyFirstJavaClass`
* 方法的命名：所有方法名称必须以小写字母开头。  
      如果方法名称中包含几个单词，那么其中的每个单词的首字母都要大写。  
      例如 `public void myMethodName()`
* 程序文件名：程序的文件名必须和类的名称准确匹配。  
      保存文件时，你应当以类的名称保存（注意区分大小写），并在文件名后加 .java 的后缀（如果文件名和类名不匹配那么将无法编译你的程序）。  
      例如：假设类名是 `MyFirstJavaProgram`，那么文件名就应该是 `MyFirstJavaProgram.java`。
* public static void main(String args[])：Java 程序都是从 `main()` 方法开始处理的，这个方法是 Java 程序的强制性的部分。

#### Java 标识符
{:.no_toc}

Java 的所有的组成部分都要有自己的名称。类、变量和方法的名称称为标识符。

在 Java 中，需要记住关于标识符的一下几点。如下：

* 所有标识符必须以字母（ A 到 Z 或者 a 到 z ）、货币字符（ $ ）或者下划线( _ )开头。
* 在第一个标识符之后可以有任意字母组合。
* 关键字不能被用作标识符。
* 大多数标识符需要区分大小写。
* 合法标识符的例子： age, $salary, _value, __1_value
* 非法标识符的例子： 123abc, -salary

#### Java 修饰符
{:.no_toc}

如其语言一样，方法和类等等是可以通过修饰符修饰的。Java 中有两种修饰符：

* 访问修饰符：default, public , protected, private
* 非访问修饰符：final, abstract, strictfp

#### Java 变量
{:.no_toc}

在 Java 中我们可以看到如下变量：

* 本地变量
* 类变量（静态变量）
* 实例变量（非静态变量）

#### Java 数组
{:.no_toc}

数组时储存有多重相同变量类型的对象。然而，数字自身也是堆中的一个对象。我们将要学习如何声明，建立，初始化数组。

#### Java 枚举值
{:.no_toc}

枚举是在 Java5.0 版本中被引进的。枚举限制了变量要有一些预先定义的值。枚举列表中的值称为枚举值。

运用枚举值可以大大减少你的代码中的漏洞。

举例来说，如果我们想为一家鲜榨果汁店编个程序，就可以将杯子的尺寸限制为小中和大。这样就可以确保人们不会定大中小尺寸之外的了。

例如：

```java
class FreshJuice {

   enum FreshJuiceSize{ SMALL, MEDIUM, LARGE }
   FreshJuiceSize size;
}

public class FreshJuiceTest {

   public static void main(String args[]){
      FreshJuice juice = new FreshJuice();
      juice.size = FreshJuice. FreshJuiceSize.MEDIUM ;
      System.out.println("Size: " + juice.size);
   }
}
```

上述例子会输出如下结果：

`Size: MEDIUM`

> 注：枚举可以自己声明也可以在类中声明。方法变量和构造器也可以在枚举值中定义。

#### Java 关键字
{:.no_toc}

下面列出的是 Java 中保留的关键字。这些关键字不能用作常量、变量和其他标识符的名字。

| 关键字 | 关键字 | 关键字 | 关键字 |
| :---: | :---: | :---: | :---: |
| abstract | assert | boolean | break |
| byte | case	| catch | char |
| class | const	| continue | default |
| do | double	| else | enum |
| extends | final | finally | float |
| for | goto | if | implements |
| import | instanceof | int | interface |
| long | native | new | package |
| private | protected | public | return |
| short | static | strictfp | super |
| switch | synchronized | this | throw |
| throws | transient | try | void |
| volatile | while |

#### Java 中的注释
{:.no_toc}

Java 像 C 和 C++ 一样支持单行或多行注释。所有注释中的字母都会被 Java 编译器忽略。

```java
public class MyFirstJavaProgram{

   /* This is my first java program.
    * This will print 'Hello World' as the output
    * This is an example of multi-line comments.
    */

    public static void main(String []args){
       // This is an example of single line comment
       /* This is also an example of single line comment. */
       System.out.println("Hello World");
    }
}
```

#### 使用空行
{:.no_toc}

一行只有空格的行可能是注释，这样的行叫做空行，Java 会完全忽略它。

#### 继承
{:.no_toc}

在 Java 中类可以从类中产生。简单来说，如果你想要创建一个新类并且现在已经存在一个包含你所需要代码的类，那么就有可能从这些存在的代码创建你的类。

这个概念可以使你在没有在新类中重写代码的情况下重复利用文件和方法。在这种情况下已经存在的类叫做超类，后来产生的类叫做子类。

#### 接口
{:.no_toc}

在 Java 语言中，接口可以定义为对象之间如何通信的合同。就继承性而言接口扮演了重要角色。

接口定义了子类所需要用的方法。但是方法的实施还是取决于子类。

---

### 1.4 Java 的对象和类
{:toc #java-1-4}

Java 作为一种具有面向对象特征的语言，Java 包括以下几项基本概念：

* 多态性
* 继承性
* 封装性
* 抽象性
* 类
* 对象
* 实例
* 消息解析


Java 的对象：有状态和行为，状态被储存在文件中，它的行为通过方法来表现。方法控制对象的内在状态，完成对象与对象之间的交流。

Java 的类：类是有独立的对象创造出的蓝图。

下面给出了一个类的例子：

```java
public class Dog{
   String breed;
   int age;
   String color;

   void barking(){
   }

   void hungry(){
   }

   void sleeping(){
   }
}
```

类可以包括以下的变量类型：

* 局部变量：在方法、构造器或区域内声明的变量。变量将会在方法内产生和发展，然后当方法结束变量就会破坏。
* 实例变量：在类内但在方法外声明的变量。这些变量是当类被装载时被实体化的。实例变量可以从特定类的任何方法、构造器、区域中存取。
* 类变量：在类内声明的变量，它处在任何方法之外，有静态关键字。

类可以有任意数量的方法来存取不同种类方法的值。在上面的例子中，barking()，hungry() 和 sleeping() 是方法。

---

**下面提到的是一些深入了解 Java 语言所必须知道的内容。**

#### 构造器
{:.no_toc}

每一个类都有一个构造器。如果我们不单独为一个类编写构造器那么 Java 的编译器将会给这个类建立一个默认的构造器。

每当一个新的对象被创建，至少一个构造器将会被调用。构造器的一个最主要的原则就是他们必须和类有同样的名字。一个类可以有不止一个构造器。

下面给出了一个构造器的例子：

```java
public class Puppy{
   public Puppy(){
   }

   public Puppy(String name){
      // This constructor has one parameter, name.
   }
}
```

在需要只创建一个类的实例的时，Java 也支持单例。

#### 创造一个对象
{:.no_toc}

如前所述，类为对象提供了蓝图。因此基本来说一个对象是从一个类中创造出来的。在 Java 中，新的关键词被用来创造新的对象。当我们从类中创造对象时需要三步：

1. 声明：变量声明可以声明其所代表的对象类型。
2. 实例化：“新的”关键词用来创造对象。
3. 初始化：“新的”关键词伴随着一个构造器的启用，这个将新的对象初始化。

下面给出了一个创造对象的例子：

```java
public class Puppy{

   public Puppy(String name){
      // This constructor has one parameter, name.
      System.out.println("Passed Name is :" + name );
   }
   public static void main(String []args){
      // Following statement would create an object myPuppy
      Puppy myPuppy = new Puppy( "tommy" );
   }
}
```

如果编译并运行上述程序，那么将输出下列结果：

`Passed Name is :tommy`

访问实体变量和方法
实体变量和方法是通过创造对象来访问的。为了访问一个实体变量完全有效的路径应该如下所示：

```java
/* First create an object */
ObjectReference = new Constructor();
/* Now call a variable as follows */
ObjectReference.variableName;
/* Now you can call a class method as follows */
ObjectReference.MethodName();
```

例子:这个例子解释了如何存取类的实体变量和方法：

```java
public class Puppy{

   int puppyAge;

   public Puppy(String name){
      // This constructor has one parameter, name.
      System.out.println("Passed Name is : " + name );
   }
   public void setAge( int age ){
       puppyAge = age;
   }

   public int getAge( ){
       System.out.println("Puppy's age is : " + puppyAge );
       return puppyAge;
   }
   public static void main(String []args){
      /* Object creation */
      Puppy myPuppy = new Puppy( "tommy" );

      /* Call class method to set puppy's age */
      myPuppy.setAge( 2 );

      /* Call another class method to get puppy's age */
      myPuppy.getAge( );

      /* You can access instance variable as follows as well */
      System.out.println("Variable Value : " + myPuppy.puppyAge );
   }
}

```

如果我们编译运行上述程序，那么将会产生如下结果：

```
Passed Name is : tommy
Puppy's age is : 2
Variable Value : 2
```

#### 源文件声明规则
{:.no_toc}

当在源文件中声明类，输入和打包语法时，这些规则是十分重要的。

* 每个源文件中只能有一个公共类。
* 一个源文件可以有很多非公共类。
* 公共类的名称必须是源文件的名称同时也要以 .java 为后缀。举例来说：类的名称是 public class Employee{}，那么源文件就应该是 Employee.java。
* 如果类是在一个程序包中定义的，那么程序包的声明必须是源文件的第一个声明。
*如果输入声明出现那么他们必须被写在封装声明和类声明之间。如果没有封装声明那么输入声明必须在源文件的第一行。
* 输入和打包声明会暗示所有源文件中的存在的类。在源文件中很难为不同的类区分输入和封装声明。
类有不同的访问级别并且有很多不同的类；抽象的类，最终的类等等。我将会在后面的访问控制修饰符章节解释这些。

除了以上提到的类的类型之外， Java 也有像内部类和匿名类这样的特殊类。

##### Java 程序包
{:.no_toc}

简而言之，就是一种分类类和接口的一种方法。当用 Java 开发程序时，数百个类和接口会被编写，因此分类这些类不但是必须的而且也是会使问题变得容易的。

##### Import 语法
{:.no_toc}

在 Java 中，如果给出包括封装和类的名称的全限定名，那么编译器很容易定位到源类和源代码。Import 语法是给编译器寻找特定类的适当位置的一种方法。

举例来说，下面这行语句将会要求编译器去装载 `java_installation/java/io` 路径下的所有可用的类:

`import java.io.*;`

##### 一个简单的案例学习
{:.no_toc}

在我们的案例学习中，我们将创造两个类。他们是 Employee 和 EmployeeTest。

首先打开记事本输入下列代码，以 `Employee.java` 为文件名保存这个源文件。

这个是 Employee 类，这个类是公共类。这个 Employee 类包括四个实体变量姓名（name），年龄（age），职位（designation）和薪水（salary）。这个类有一个确定的需要参数的的构造器。

```java
import java.io.*;
public class Employee{
   String name;
   int age;
   String designation;
   double salary;

   // This is the constructor of the class Employee
   public Employee(String name){
      this.name = name;
   }
   // Assign the age of the Employee  to the variable age.
   public void empAge(int empAge){
      age =  empAge;
   }
   /* Assign the designation to the variable designation.*/
   public void empDesignation(String empDesig){
      designation = empDesig;
   }
   /* Assign the salary to the variable salary.*/
   public void empSalary(double empSalary){
      salary = empSalary;
   }
   /* Print the Employee details */
   public void printEmployee(){
      System.out.println("Name:"+ name );
      System.out.println("Age:" + age );
      System.out.println("Designation:" + designation );
      System.out.println("Salary:" + salary);
   }
}
```

正如本指导之前所述，编程从主函数开始。因此，我们为了运行这个 Employee 类就应当建立主函数和类。我们将分别为这些任务创建类。

下面所给的是 EmployeeTest 类，这个类创建了两个 Employee 类的实例，并且为每个对象调用方法从而给每个变量赋值。在 EmployeeTest.java 文件中保存下列代码

```java
import java.io.*;
public class EmployeeTest{

   public static void main(String args[]){
      /* Create two objects using constructor */
      Employee empOne = new Employee("James Smith");
      Employee empTwo = new Employee("Mary Anne");

      // Invoking methods for each object created
      empOne.empAge(26);
      empOne.empDesignation("Senior Software Engineer");
      empOne.empSalary(1000);
      empOne.printEmployee();

      empTwo.empAge(21);
      empTwo.empDesignation("Software Engineer");
      empTwo.empSalary(500);
      empTwo.printEmployee();
   }
}
```

现在编译两个类然后运行 EmployeeTest，你将会看到如下结果：

```
Name:James Smith
Age:26
Designation:Senior Software Engineer
Salary:1000.0
Name:Mary Anne
Age:21
Designation:Software Engineer
Salary:500.0
```

### 1.5 Java 描述符的类型
{:toc #java-1-5}

描述符是你添加到那些定义中来改变他们的意思的关键词。Java 语言有很多描述符，包括以下这些：

* 可访问描述符：Java 提供一系列可访问描述符来设定类，变量，方法和构造器的访问级别，四种访问级别如下
	1. 无描述符，对封装可见。
	2. private ，仅对类可见
	3. public， 全部可见
	4. protected ，对封装和子类可见

* 不可访问描述符：Java 提供一些不可访问描述符来满足其他功能
	1. Static，用来创造类方法和变量的。
	2. Final，用来最终确定和实施类、方法和变量的。
	3. synchronized 和 volatile，用来当做线的。

应用描述符，你可以在类、方法、变量中加入相应关键字。描述符要先于声明，如下面的例子所示：

```java
public class className {
   // ...
}
private boolean myFlag;
static final double weeks = 9.5;
protected static final int BOXWIDTH = 42;
public static void main(String[] arguments) {
   // body of method
}
```