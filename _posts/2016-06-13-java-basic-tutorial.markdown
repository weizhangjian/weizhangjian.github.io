---
layout:     post
title:      "Java 基础教程"
subtitle:   " \"Java语言快速入门\""
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

Java 是由Sun Microsystems公司于1995年5月推出的高级程序设计语言。
Java可运行于多个平台，如Windows, Mac OS，及其他多种UNIX版本的系统。
本教程通过简单的实例将让大家更好的了解JAVA编程语言。

# 1. Java  初体验

以下我们通过一个简单的实例来展示 Java 编程，创建文件 HelloWorld.java(文件名需与类名一致),   
代码如下：

```java
public class HelloWorld {
	public static void main(String[] args) {
		System.out.println("Hello World");
	}
}
```

<ul class="pager">
<li class="previous">
<a href="http://www.runoob.com/try/showjava.php?filename=HelloWorld" data-toggle="tooltip" data-placement="top" title="运行实例">运行实例</a>
</li>
</ul>

##### 执行命令解析：
{:.no_toc}

以上我们使用了两个命令`javac` 和`java`。  
javac 命令用于将 java 源文件编译为 class 字节码文件，如：` javac HelloWorld.java`。  
运行javac命令后，如果成功编译没有错误的话，会出现一个 HelloWorld.class 的文件。  
java 命令可以运行 class 字节码文件，如: java HelloWorld。

> 注意：java命令后面不要加.class。

Gif 图演示：  
![](/img/in-post/post-java-basic-tutorial/java-HelloWorld.gif)

# 2. Java 简介

Java是由Sun Microsystems公司于1995年5月推出的Java面向对象程序设计语言和Java平台的总称。由James Gosling和同事们共同研发，并在1995年正式推出。

Java分为三个体系：

* JavaSE  （J2SE）（Java2 Platform Standard Edition，java平台标准版）
* JavaEE  （J2EE）（Java 2 Platform,Enterprise Edition，java平台企业版）
* JavaME（J2ME）（Java 2 Platform Micro Edition，java平台微型版）

2005年6月，JavaOne大会召开，SUN公司公开Java SE 6。此时，Java的各种版本已经更名以取消其中的数字"2"：J2EE更名为Java EE, J2SE更名为Java SE，J2ME更名为Java ME。


--------


##### 主要特性
{:.no_toc}

* **Java语言是简单的：**  
  Java语言的语法与C语言和C++语言很接近，使得大多数程序员很容易学习和使用。另一方面，Java丢弃了C++中很少使用的、很难理解的、令人迷惑的那些特性，如操作符重载、多继承、自动的强制类型转换。特别地，Java语言不使用指针，而是引用。并提供了自动的废料收集，使得程序员不必为内存管理而担忧。

* **Java语言是面向对象的：**  
  Java语言提供类、接口和继承等原语，为了简单起见，只支持类之间的单继承，但支持接口之间的多继承，并支持类与接口之间的实现机制（关键字为implements）。Java语言全面支持动态绑定，而C++语言只对虚函数使用动态绑定。总之，Java语言是一个纯的面向对象程序设计语言。

* **Java语言是分布式的：**  
  Java语言支持Internet应用的开发，在基本的Java应用编程接口中有一个网络应用编程接口（java net），它提供了用于网络应用编程的类库，包括URL、URLConnection、Socket、ServerSocket等。Java的RMI（远程方法激活）机制也是开发分布式应用的重要手段。

* **Java语言是健壮的：**  
  Java的强类型机制、异常处理、垃圾的自动收集等是Java程序健壮性的重要保证。对指针的丢弃是Java的明智选择。Java的安全检查机制使得Java更具健壮性。

* **Java语言是安全的：**  
  Java通常被用在网络环境中，为此，Java提供了一个安全机制以防恶意代码的攻击。除了Java语言具有的许多安全特性以外，Java对通过网络下载的类具有一个安全防范机制（类ClassLoader），如分配不同的名字空间以防替代本地的同名类、字节代码检查，并提供安全管理机制（类SecurityManager）让Java应用设置安全哨兵。

* **Java语言是体系结构中立的：**  
  Java程序（后缀为java的文件）在Java平台上被编译为体系结构中立的字节码格式（后缀为class的文件），然后可以在实现这个Java平台的任何系统中运行。这种途径适合于异构的网络环境和软件的分发。

* **Java语言是可移植的：**  
  这种可移植性来源于体系结构中立性，另外，Java还严格规定了各个基本数据类型的长度。Java系统本身也具有很强的可移植性，Java编译器是用Java实现的，Java的运行环境是用ANSI C实现的。

* **Java语言是解释型的：**  
  如前所述，Java程序在Java平台上被编译为字节码格式，然后可以在实现这个Java平台的任何系统中运行。在运行时，Java平台中的Java解释器对这些字节码进行解释执行，执行过程中需要的类在联接阶段被载入到运行环境中。

* **Java是高性能的：**  
  与那些解释型的高级脚本语言相比，Java的确是高性能的。事实上，Java的运行速度随着JIT(Just-In-Time）编译器技术的发展越来越接近于C++。

* **Java语言是多线程的：**  
  在Java语言中，线程是一种特殊的对象，它必须由Thread类或其子（孙）类来创建。通常有两种方法来创建线程：其一，使用型构为Thread(Runnable)的构造子将一个实现了Runnable接口的对象包装成一个线程，其二，从Thread类派生出子类并重写run方法，使用该子类创建的对象即为线程。值得注意的是Thread类已经实现了Runnable接口，因此，任何一个线程均有它的run方法，而run方法中包含了线程所要运行的代码。线程的活动由一组方法来控制。Java语言支持多个线程的同时执行，并提供多线程之间的同步机制（关键字为synchronized）。

* **Java语言是动态的：**  
  Java语言的设计目标之一是适应于动态变化的环境。Java程序需要的类能够动态地被载入到运行环境，也可以通过网络来载入所需要的类。这也有利于软件的升级。另外，Java中的类有一个运行时刻的表示，能进行运行时刻的类型检查。


--------


##### Java开发工具
{:.no_toc}

Java语言尽量保证系统内存在1G以上，其他工具如下所示：
  
* Linux 系统或者Windows 95/98/2000/XP，WIN 7/8/10系统
* Java JDK 8 
* 编辑器：[Notepad++](https://notepad-plus-plus.org/)，这是在windows下的一个免费的代码编辑器，效率高，可以替代记事本来使用。
* IDE：[Eclipse](http://www.eclipse.org/)，这是一款由 eclipse 开源社区开发的 Java 编辑器。

##### 使用 Eclipse 运行第一个 Java 程序
{:.no_toc}

视频演示如下所示：  
<video style="width: 80%;" controls >
    <source src="http://static.runoob.com/video/javadownload.mp4" type="video/mp4">
</video>


--------


# 3. Java 环境设置

##### window系统安装java
{:.no_toc}

1.下载JDK：Java SE 可以从官网[免费下载](http://www.oracle.com/technetwork/java/javase/downloads/index.html)，根据你的系统类型下载相应版本的 Java。

2.安装JDK：然后运行下载好的 jdk-*-*.exe 文件进行安装，按照步骤提示默认安装即可，安装JDK的时候也会安装JRE，一并安装就可以了。

3.Windows下设置环境变量：以jdk-8u91-windows-x64.exe为例，JDK安装在 c:\Program Files\java\jdk1.8.0_91下。

"开始"->"运行"，键入"cmd"，然后分别输入以下命令：

```
wmic ENVIRONMENT where "name='JAVA_HOME' and UserName='<system>'" delete
wmic ENVIRONMENT create name="JAVA_HOME",username="<system>",VariableValue="C:\Program  Files\Java\jdk1.8.0_91"
wmic ENVIRONMENT where "name='CLASSPATH' and UserName='<system>'" delete
wmic ENVIRONMENT create name="CLASSPATH",username="<system>",VariableValue=".;%JAVA_HOME%\lib\dt.jar;%JAVA_HOME%\lib\tools.jar;%JAVA_HOME%\jre\lib\rt.jar"
wmic ENVIRONMENT where "name='Path' and UserName='<system>'" set VariableValue="%path%;%JAVA_HOME%\bin;%JAVA_HOME%\jre\bin"
```

> 注意：如果使用1.5以上版本的JDK，不用设置CLASSPATH环境变量，也可以正常编译和运行Java程序。

##### 测试JDK是否安装成功
{:.no_toc}

1、"开始"->"运行"，键入"cmd"，输入命令: java -version，出现以下信息，说明环境变量配置成功；

```
C:\Users\JustinWei>java -version
java version "1.8.0_91"
Java(TM) SE Runtime Environment (build 1.8.0_91-b15)
Java HotSpot(TM) 64-Bit Server VM (build 25.91-b15, mixed mode)
```


--------

##### Linux，UNIX，Solaris，FreeBSD环境变量设置
{:.no_toc}

环境变量PATH应该设定为指向Java二进制文件安装的位置。如果设置遇到困难，请参考shell文档。

例如，假设你使用bash作为shell，你可以把下面的内容添加到你的 .bashrc文件结尾: export PATH=/path/to/java:$PATH


# 4. Java 基础语法

一个Java程序可以认为是一系列对象的集合，而这些对象通过调用彼此的方法来协同工作。下面简要介绍下类、对象、方法和实例变量的概念。

* 对象：**对象是类的一个实例，有状态（变量）和行为（方法）。**  
  例如：狗有它的状态——颜色，名字，品种，同时也有行为——摇尾巴，汪汪叫，吃东西。
* 类：**类是一个模板，它描述一类对象的行为和状态。**
* 方法：**即行为，逻辑运算、数据修改以及所有动作都是在方法中完成的**。一个类可以有很多方法。
* 实体变量：每个对象都有独特的实例变量，**对象的状态由这些实例变量的值决定。**


--------


##### 基本语法
{:.no_toc}

编写Java程序时，应注意以下几点：

* **大小写敏感性：**Java是大小写敏感的，这就意味着标识符Hello与hello是不同的。
* **类名：**对于所有的类来说，类名的首字母应该大写。  
      如果类名由若干单词组成，那么每个单词的首字母都要大写。  
      例如类 `MyFirstJavaClass`
* **方法名：**所有的方法名都应该以小写字母开头。  
      如果方法名含有若干单词，则后面的每个单词首字母大写。  
      例如 `public void myMethodName()`
* **源文件名：**源文件名必须和类名相同。当保存文件的时候，你应该使用类名作为文件名保存（切记Java是大小写敏感的），文件名的后缀为.java。（如果文件名和类名不相同则会导致编译错误）。  
      例如：假设类名是 `MyFirstJavaProgram`，那么源文件名就应该是 `MyFirstJavaProgram.java`。
* **主方法入口：**所有的Java 程序由 `public static void main(String []args)` 方法开始执行。这个方法是 Java 程序的强制性的部分。


--------


##### Java 标识符
{:.no_toc}

Java所有的组成部分都需要名字。类名、变量名以及方法名都被称为标识符。  
关于Java标识符，有以下几点需要注意：

* 所有标识符必须以字母（ A 到 Z 或者 a 到 z ）、货币字符（ $ ）或者下划线( _ )开头
* 首字符之后可以是任何字符的组合
* 关键字不能被用作标识符
* 标识符是大小写敏感的
* 合法标识符的例子： age, $salary, _value, __1_value
* 非法标识符的例子： 123abc, -salary


--------


##### Java 修饰符
{:.no_toc}

像其他语言一样，Java可以使用修饰符来修饰类中方法和属性。主要有两类修饰符：

* 访问修饰符：default, public , protected, private
* 非访问修饰符：final, abstract, strictfp


--------


##### Java 变量
{:.no_toc}

在 Java 中主要有以下集中变量：

* 局部变量
* 类变量（静态变量）
* 成员变量（非静态变量）


--------


##### Java 数组
{:.no_toc}

数组是储存在堆上的对象，可以保存多个同类型变量。在后面的章节中，我们将会学到如何声明、构造以及初始化一个数组。


--------


##### Java 枚举
{:.no_toc}

Java 5.0引入了枚举，枚举限制变量只能是预先设定好的值。使用枚举可以减少代码中的bug。  
例如，我们为果汁店设计一个程序，它将限制果汁为小杯、中杯、大杯。这就意味着它不允许顾客点除了这三种尺寸外的果汁。

```java
class FreshJuice {
	enum FreshJuiceSize {
		SMALL, MEDIUM, LARGE
	}

	FreshJuiceSize size;
}

public class FreshJuiceTest {
	public static void main(String args[]) {
		FreshJuice juice = new FreshJuice();
		juice.size = FreshJuice.FreshJuiceSize.MEDIUM;
		System.out.println("Size: " + juice.size);
	}
}
```

>注意：枚举可以单独声明或者声明在类里面。方法、变量、构造函数也可以在枚举中定义。

上述例子会输出如下结果：

`Size: MEDIUM`


--------


##### Java 关键字
{:.no_toc}

下面列出了Java保留字。这些保留字不能用于常量、变量、和任何标识符的名称。

| 关键字 | 描述 |
| :---: | :--- |
|abstract|	抽象方法，抽象类的修饰符|
|assert|	断言条件是否满足|
|boolean|	布尔数据类型|
|break|	跳出循环或者label代码段|
|byte|	8-bit 有符号数据类型|
|case|	switch语句的一个条件|
|catch|	和try搭配扑捉异常信息|
|char|	16-bit Unicode字符数据类型|
|class|	定义类|
|const|	未使用|
|continue|	不执行循环体剩余部分|
|default|	switch语句中的默认分支|
|do|	循环语句，循环体至少会执行一次|
|double|	64-bit双精度浮点数|
|else|	if条件不成立时执行的分支|
|enum|	枚举类型|
|extends|	表示一个类是另一个类的子类|
|final|	表示一个值在初始化之后就不能再改变了表示方法不能被重写，或者一个类不能有子类|
|finally|	为了完成执行的代码而设计的，主要是为了程序的健壮性和完整性，无论有没有异常发生都执行代码。|
|float|	32-bit单精度浮点数|
|for|	for循环语句|
|goto|	未使用|
|if|	条件语句|
|implements|	表示一个类实现了接口|
|import|	导入类|
|instanceof|	测试一个对象是否是某个类的实例|
|int|	32位整型数|
|interface|	接口，一种抽象的类型，仅有方法和常量的定义|
|long|	64位整型数|
|native|	表示方法用非java代码实现|
|new|	分配新的类实例|
|package|	一系列相关类组成一个包|
|private|	表示私有字段，或者方法等，只能从类内部访问|
|protected|	表示字段只能通过类或者其子类访问，子类或者在同一个包内的其他类|
|public|	表示共有属性或者方法|
|return|	方法返回值|
|short|	16位数字|
|static|	表示在类级别定义，所有实例共享的|
|strictfp|	浮点数比较使用严格的规则|
|super|	表示基类|
|switch|	选择语句|
|synchronized|	表示同一时间只能由一个线程访问的代码块|
|this|	表示调用当前实例或者调用另一个构造函数|
|throw|	抛出异常|
|throws|	定义方法可能抛出的异常|
|transient|	修饰不要序列化的字段|
|try|	表示代码块要做异常处理或者和finally配合表示是否抛出异常都执行finally中的代码|
|void|	标记方法不返回任何值|
|volatile|	标记字段可能会被多个线程同时访问，而不做同步|
|while|	while循环|


--------


##### Java 中的注释
{:.no_toc}

类似于C/C++，Java也支持单行以及多行注释。注释中的字符将被Java编译器忽略。

```java
public class HelloWorld {
	/*	这是第一个Java程序
	 *	它将打印Hello World
	 *	这是一个多行注释的示例
	 */
	public static void main(String[] args) {
		// 这是单行注释的示例
		/* 这个也是单行注释的示例 */
		System.out.println("Hello World");
	}
}
```


--------


##### Java 空行
{:.no_toc}

空白行，或者有注释的的行，Java编译器都会忽略掉。


--------


#### 继承
{:.no_toc}

在Java中，一个类可以由其他类派生。如果你要创建一个类，而且已经存在一个类具有你所需要的属性或方法，那么你可以将新创建的类继承该类。  
利用继承的方法，可以重用已存在类的方法和属性，而不用重写这些代码。被继承的类称为超类（super class），派生类称为子类（subclass）。


--------


##### 接口
{:.no_toc}

在Java中，接口可理解为对象间相互通信的协议。接口在继承中扮演着很重要的角色。  
接口只定义派生要用到的方法，但是方法的具体实现完全取决于派生类。


--------


# 5. Java 的对象和类

Java 作为一种面向对象语言，支持以下基本概念：

* 多态
* 继承
* 封装
* 抽象
* 类
* 对象
* 实例
* 方法
* 重载

本节我们重点研究对象和类的概念。

* **对象：**对象是类的一个实例，有状态和行为，状态被储存在文件中，它的行为通过方法来表现。方法控制对象的内在状态，完成对象与对象之间的交流。
* **类：**类是一个模板，它描述一类对象的行为和状态。

下图中男孩女孩为类，而具体的每个人为该类的对象：  
![](/img/in-post/post-java-basic-tutorial/object-class.jpg)


--------


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

### 1.5 Java 修饰符的类型
{:toc #java-1-5}

描述符是你添加到那些定义中来改变他们的意思的关键词。Java 语言有很多描述符，包括以下这些：

* 可访问修饰符：Java 提供一系列可访问描述符来设定类，变量，方法和构造器的访问级别，四种访问级别如下
	1. 无描述符，对封装可见。
	2. private ，仅对类可见
	3. public， 全部可见
	4. protected ，对封装和子类可见

* 不可访问修饰符：Java 提供一些不可访问描述符来满足其他功能
	1. static，用来创造类方法和变量的。
	2. final，用来最终确定和实施类、方法和变量的。
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

### 1.6 Java 基本数据类型
{:toc #java-1-6}

变量就是用来储存值而保留的内存位置。这就意味着当你创建一个变量时就会在内存中占用一定的空间。

基于变量的数据类型，操作系统会进行内存分配并且决定什么将被储存在保留内存中。因此，通过给变量分配不同的数据类型，你可以在这些变量中存储整数，小数或者字字母。

Java 中有两种有效地数据类型：

* 原始数据类型
* 引用数据类型()

#### 原始数据类型
{:.no_toc}

Java 支持 8 种原始数据类型。原始数据类型是由该语言预先定义的并用关键词命名的。下面让我们深入学习一下这 8 种数据类型。

##### 字节型（byte）
{:.no_toc}

* 字节型是一种 8 位有正负的二进制整数
* 最小值是 -128(-2^7)
* 最大值是 127(2^7-1)
* 默认值为 0
* 字节型数据类型主要是为了在大型数组内节省空间，主要是替代整数由于字节型比整数小 4 倍。
* 例如：byte a = 100 , byte b = -50

##### 短整数（short）
{:.no_toc}

* 短整数是一种 16 位有正负的二进制整数
* 最小值是 -32768(-2^15)
* 最大值是 32767(2^15-1)
* 短整数类型的数据也可以像字节型一样用于节省空间。短整数比整数小两倍
* 默认值为 0
* 例如：short s = 10000, short r = -20000

##### 整数型（int）
{:.no_toc}

* 整数型是一种 32 位有正负的二进制整数
* 最小值是 - 2,147,483,648(-2^31)
* 最大值是 2,147,483,647(2^31 -1)
* 整数型一般默认被应用于整数值除非担心内存不够用。
* 默认值为 0
* 例如：int a = 100000, int b = -200000

##### 长整型（long）
{:.no_toc}

* 长整型是一种 64 位有正负的二进制整数
* 最小值是 -9,223,372,036,854,775,808(-2^63)
* 最大值是 9,223,372,036,854,775,807 (2^63 -1)
* 这种数据类型一般是在需要比整数型范围更大时应用。
* 默认值为 0L
* 例如：long a = 100000L, int b = -200000L

##### 浮点型（float）
{:.no_toc}

* 浮点型数据是一种单精度的 32 位 IEEE 754 标准下的浮点数据。
*浮点型数据主要是为了在大型浮点数字数组中节约内存。
* 默认值是 0.0f。
* 浮点型数据不能用于如货币这样的精确数据。
* 例如：float f1 = 234.5f

##### 双精度型（double）
{:.no_toc}

* 双精度型数据是一种双精度的 64 位 IEEE 754 标准下的浮点数据。
* 这种数据类型主要是默认被用于表示小数的值，一般是默认的选择。
* 双精度型数据不能用于如货币这样的精确数据。
* 默认值是 0.0d
* 例如：double d1 = 123.4

##### 布尔型（boolean）
{:.no_toc}

* 布尔型数据代表一个信息比特。
* 它只有两个可能的值：真（true）和假（false）
* 这种数据类型用于真假条件下的简单标记。
* 默认值是假（false）
* 例如：boolean one = true

##### 字符型（char）
{:.no_toc}

* 字符型数据是简单的 16 位 Unicode 标准下的字符。
* 最小值是： '\u0000' (或 0)。
* 最大值是： '\uffff' (或 65,535 )。
* 字符型数据可以用来储存任意字母。
* 例如： char letter A（字符型的字母A） ='A'

#### 引用数据类型
{:.no_toc}

* 引用数据类型是由类的编辑器定义的。他们是用于访问对象的。这些变量被定义为不可更改的特定类型。例如：Employee， Puppy 等等。
* 类对象和数组变量就是这种引用数据类型。
* 任何引用数据类型的默认值都为空。
* 一个引用数据类型可以被用于任何声明类型和兼容类型的对象。
* 例如：Animal animal = new Animal("giraffe")；

Java 常量
常量是代表固定值的源代码。他们直接以代码的形式代表而没有任何估计。

常量可以被分配给任意的原始变量类型。例如：

```
byte a = 68;
char a = 'A'
```

字节型，整数型，长整型和短整型也可以由十进制，十六进制和八进制计数系统表示。

当用这些技术系统表示直接量时，前缀 0 是为了标明八进制，前缀 0x 是为了标明十六进制。例如：

```
int decimal = 100;
int octal = 0144;
int hexa = 0x64;
```

Java 中的字符串型常量的规定和其他大多数语言一样，也是要写在双引号中间。字符串型直接量的例子如下：

```
"Hello World"
"two\nlines"
"\"This is in quotes\""
```

字符和字符串型常量可以包含任意的 Unicode 字母。例如：

```
char a = '\u0001';
String a = "\u0001";
```

Java 语言也支持一些特殊的转义序列的字符和字符串直接量。他们是：

| 转义字符 | 含义 |
| :---: | :---: |
|`\n`|换行 (0x0a)|
|`\r`|	回车 (0x0d)|
|`\f`|	换页 (0x0c)|
|`\b`|退格 (0x08)|
|`\s`|	空格 (0x20)|
|`\t`|	tab|
|`\"`|	双引号|
|`\'`|	单引号|
|`\`|	反斜杠|
|`\ddd`|八进制字符 (ddd)|
|`\uxxxx`|十六进制 UNICODE 字符 (xxxx)|

### 1.7 Java 变量类型
{:toc #java-1-7}

变量可以给我们提供我们程序可以操纵的命名的存储。Java 中的每种变量都有特定的类型，这决定了变量的大小和它的设计占用内存空间；这一些列的值可以存储在那个内存空间中；变量可以应用的操作。

在使用前你必须现将所要使用的变量进行声明。声明变量的基本格式如下：

    data type variable [ = value][, variable [= value] ...] ;


这里的 data type 是 Java 的一种数据类型，variable 是一种变量的名称。要声明一个以上的特定变量类型，你可以采用逗号分隔开。

下面是 Java 中有效的变量声明和赋值的例子：

```java
int a, b, c; // Declares three ints, a, b, and c.
int a = 10, b = 10; // Example of initialization
byte B = 22; // initializes a byte type variable B.
double pi = 3.14159; // declares and assigns a value of PI.
char a = 'a'; // the char variable a iis initialized with value 'a'
```

本章将介绍 Java 中的各种可用的变量类型。Java 中共有三种变量：

* 本地变量
* 实例变量
* 类、静态变量

#### 本地变量
{:.no_toc}


*本地变量在方法、构造器或者块中声明
*本地变量在方法、构造器或者块进入时被创建，一旦退出该变量就会被摧毁
*可访问描述符不能用于本地变量
*本地变量仅在已经声明的方法、构造器或者块中可见
*本地变量在栈深度内部实施
*本地变量没有默认值，因此本地变量必须被声明并且在第一次使用前要给它赋值

##### 例子
{:.no_toc}

这里，age（年龄）是本地变量。这是在 pupAge() 方法下定义的，它的范围仅限于这个方法。

```java
public class Test{
   public void pupAge(){
      int age = 0;
      age = age + 7;
      System.out.println("Puppy age is : " + age);
   }

   public static void main(String args[]){
      Test test = new Test();
      test.pupAge();
   }
}
```
上述代码会输出如下结果：

    Puppy age is: 7

##### 例子
{:.no_toc}

下面的例子使用了本地变量 age 但是没有进行初始化，所以在编辑是就会显示错误。

```java
public class Test{
   public void pupAge(){
      int age;
      age = age + 7;
      System.out.println("Puppy age is : " + age);
   }

   public static void main(String args[]){
      Test test = new Test();
      test.pupAge();
   }
}
```
编辑时会产生如下错误：

```
Test.java:4:variable number might not have been initialized
age = age + 7;
^
1 error
```

#### 实例变量
{:.no_toc}

* 实例变量在类中声明，但是它在方法、构造器或者块外。
* 当堆中的对象被分配了一个空间时，每个实例变量的位置就被创建了。
* 当对象采用关键字“ new ”创建时实例变量就被创建了，当对象被销毁时它也就被销毁了。
* 实例变量的值必须被一个以上的方法、构造器或者块，或者类中必须出现的对象的状态的重要部分所引用。
* 实例变量可以在类水平上在使用前或者使用后声明。
* 实例变量可以用可访问描述符。
* 实例变量对类中的所有方法、构造器或者块可见。一般来讲，推荐将这些变量私有（访问层面）。然而子类的可见性可用可访问描述符给予那些变量。
* 实例变量有默认值。数字的默认值为零，布尔型默认值为假，对象引用默认值为空。在声明或者构造器内可以进行赋值。
* 实例变量可以采用直接在类中叫名字方式访问。然而在静态方法和不同的类（实例变量可以被访问）中应当使用完全限定名称。ObjectReference.VariableName

##### 例子
{:.no_toc}

```java
import java.io.*;

public class Employee{
   // this instance variable is visible for any child class.
   public String name;

   // salary  variable is visible in Employee class only.
   private double salary;

   // The name variable is assigned in the constructor.
   public Employee (String empName){
      name = empName;
   }

   // The salary variable is assigned a value.
   public void setSalary(double empSal){
      salary = empSal;
   }

   // This method prints the employee details.
   public void printEmp(){
      System.out.println("name  : " + name );
      System.out.println("salary :" + salary);
   }

   public static void main(String args[]){
      Employee empOne = new Employee("Ransika");
      empOne.setSalary(1000);
      empOne.printEmp();
   }
}
```

上述代码会输出如下结果：

```
name  : Ransika
salary :1000.0
```

#### 类、静态变量
{:.no_toc}

* 类变量也叫静态变量，它是在类中用 static 关键字声明的，但是它在方法、构造器或者块之外。
* 每个类中只有一个类变量，不管这个类有多少对象。
* 除了作为常量被声明之外，类变量很少被应用。常量是被作为 public、private, final 和 static 被声明的变量。实例变量的初始值不会被改变。
* 静态变量存储在静态内存中，很少采用静态变量而不是声明结束或者用常量public 或 private 之一。
* 静态变量随着程序的开始和结束而开始和结束。
* 可见性和实例变量相似。然而大多数静态变量被声明为public由于他们必须为类的使用者所用。
* 默认值和实例变量相似。对于数字的默认值为零，布尔型默认值为假，对象引用默认值为空。在声明或者构造器内可以进行赋值。除此之外，可以在特殊的静态初始化区赋值。
* 静态变量可以用类的名称访问。ClassName.VariableName
* 当静态变量被作为 public static final 声明时，变量（常量）名称都要用大写字母。如果静态变量不是 public 和 final，它的命名方法和实例变量和本地变量相同。

##### 例子
{:.no_toc}

```java
import java.io.*;

public class Employee{
   // salary  variable is a private static variable
   private static double salary;

   // DEPARTMENT is a constant
   public static final String DEPARTMENT = "Development ";

   public static void main(String args[]){
      salary = 1000;
      System.out.println(DEPARTMENT+"average salary:"+salary);
   }
}
```

上述代码会输出如下结果：

    Development average salary:1000

注：如果变量从类外访问，常量就必须以 Employee.DEPARTMENT 访问。
