---
layout:     post
title:      "Java 基础教程（一）"
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
<a target="_blank" href="http://www.runoob.com/try/showjava.php?filename=HelloWorld" data-toggle="tooltip" data-placement="top" title="运行实例">运行实例</a>
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

* **对象：**对象是类的一个实例，有状态（变量）和行为（方法）。  
  例如：狗有它的状态——颜色，名字，品种，同时也有行为——摇尾巴，汪汪叫，吃东西。
* **类：**类是一个模板，它描述一类对象的行为和状态。
* **方法：**即行为，逻辑运算、数据修改以及所有动作都是在方法中完成的。
* **实体变量：**每个对象都有独特的实例变量，对象的状态由这些实例变量的值决定。


--------


##### 基本语法
{:.no_toc}

编写Java程序时，应注意以下几点：

* **大小写敏感性：**Java是大小写敏感的，这就意味着标识符Hello与hello是不同的。
* **类名：**对于所有的类来说，类名的首字母应该大写。  
      如果类名由若干单词组成，那么每个单词的首字母都要大写。  
      例如： `public class MyFirstJavaClass`
* **方法名：**所有的方法名都应该以小写字母开头。  
      如果方法名含有若干单词，则后面的每个单词首字母大写。  
      例如： `public void myMethodName()`
* **源文件名：**源文件名必须和类名相同。当保存文件的时候，你应该使用类名作为文件名保存（切记Java是大小写敏感的），文件名的后缀为.java。（如果文件名和类名不相同则会导致编译错误）。  
      例如：假设类名是 `MyFirstJavaProgram`，那么源文件名就应该是`MyFirstJavaProgram.java`。
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

**实例：**我们为果汁店设计一个程序，它将限制果汁为小杯、中杯、大杯。这就意味着它不允许顾客点除了这三种尺寸外的果汁。

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


##### 继承
{:.no_toc}

在Java中，一个类可以由其他类派生。如果你要创建一个类，而且已经存在一个类具有你所需要的属性或方法，那么你可以将新创建的类继承该类。  
利用继承的方法，可以重用已存在类的方法和属性，而不用重写这些代码。被继承的类称为超类（super class），派生类称为子类（subclass）。


--------


##### 接口
{:.no_toc}

在Java中，接口可理解为对象间相互通信的协议。接口在继承中扮演着很重要的角色。  
接口只定义派生要用到的方法，但是方法的具体实现完全取决于派生类。


--------


# 5. Java 对象和类

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

* **对象：**对象是类的一个实例，有状态和行为。
* **类：**类是一个模板，它描述一类对象的行为和状态。

下图中男孩女孩为类，而具体的每个人为该类的对象：  
![](/img/in-post/post-java-basic-tutorial/object-class.jpg)


--------

#### Java中的对象
{:.no_toc}

现在让我们深入了解什么是对象。看看周围真实的世界，会发现身边有很多对象，车，狗，人等等。所有这些对象都有自己的状态和行为。  
拿一条狗来举例，它的状态有：名字、品种、颜色，行为有：叫、摇尾巴和跑。  
对比现实对象和软件对象，它们之间十分相似。  
软件对象也有状态和行为。软件对象的状态就是属性，行为通过方法体现。  
在软件开发中，方法操作对象内部状态的改变，对象的相互调用也是通过方法来完成。

#### Java中的类
{:.no_toc}

类可以看成是创建Java对象的模板。  
通过下面一个简单的类来理解下Java中类的定义：

```java
public class Dog {
	String breed;
	int age;
	String color;

	void barking() {
	}

	void hungry() {
	}

	void sleeping() {
	}
}
```

一个类可以包含以下类型变量：

* **局部变量：**在方法、构造方法或者语句块中定义的变量被称为局部变量。变量声明和初始化都是在方法中，方法结束后，变量就会自动销毁。
* **成员变量：**成员变量是定义在类中，方法体之外的变量。这种变量在创建对象的时候实例化。成员变量可以被类中方法、构造方法和特定类的语句块访问。
* **类变量：**类变量也声明在类中，方法体之外，但必须声明为static类型。

> 一个类可以拥有多个方法，在上面的例子中：barking()、hungry()、sleeping()都是Dog类的方法。


--------



#### 构造方法
{:.no_toc}

每个类都有构造方法。如果没有显式地为类定义构造方法，Java编译器将会为该类提供一个默认构造方法。这个构造方法没有参数,修饰符是public并且方法体为空。  
在创建一个对象的时候，至少要调用一个构造方法。构造方法的名称必须与类同名，一个类可以有多个构造方法。

**实例：**

```java
public class Puppy {
	public Puppy() {
	}

	public Puppy(String name) {
		// 这个构造器仅有一个参数：name
		System.out.println("Puppy's name is : " + name );
	}
	
	public Puppy(int age) {
		// 这个构造器仅有一个参数：age
		System.out.println("Puppy's age is : " + age );
	}
	
	public static void main(String []args){
		Puppy puppyName = new Puppy("tommy");
		Puppy puppyAge = new Puppy(2);
	}
}

```

> 1. 构造方法不能有任何非访问性质的修饰符修饰，例如static、final、synchronized、abstract等都不能修饰构造方法。
> 2. 构造方法是没有返回类型的，void也不行。
> 3. 构造方法与类名相同,所以首字母一般大写。


--------


#### 创建对象
{:.no_toc}

对象是根据类创建的。在Java中，使用关键字new来创建一个新的对象。创建对象需要以下三步：

1. 声明：声明一个对象，包括对象名称和对象类型。
2. 实例化：使用关键字new来创建一个对象。
3. 初始化：使用new创建对象时，会调用构造方法初始化对象。

**实例：**

```java
public class Puppy {
	public Puppy(String name) {
		// 这个构造器仅有一个参数：name
		System.out.println("Puppy's name is : " + name);
	}

	public static void main(String[] args) {
		// 下面的语句将创建一个Puppy对象
		Puppy puppyName = new Puppy("tommy");
	}
}
```

编译并运行上面的程序，产生如下结果：

`Puppy's name is : tommy`


--------


#### 访问实例变量和方法
{:.no_toc}

通过已创建的对象来访问成员变量和成员方法，如下所示：

```java
/* 实例化对象 */
ObjectReference = new Constructor();
/* 访问类中的变量 */
ObjectReference.variableName;
/* 访问类中的方法 */
ObjectReference.MethodName();
```

**实例：**下面的例子展示如何访问实例变量和调用成员方法

```java
public class Puppy {
	int puppyAge;

	public Puppy(String name) {
		// 这个构造器仅有一个参数：name
		System.out.println("Passed Name is : " + name);
	}

	public void setAge(int age) {
		puppyAge = age;
	}

	public int getAge() {
		System.out.println("Puppy's age is : " + puppyAge);
		return puppyAge;
	}

	public static void main(String[] args) {
		/* 创建对象 */
		Puppy myPuppy = new Puppy("tommy");
		/* 通过方法来设定age */
		myPuppy.setAge(2);
		/* 调用另一个方法获取age */
		myPuppy.getAge();
		/* 你也可以像下面这样访问成员变量 */
		System.out.println("Variable Value : " + myPuppy.puppyAge);
	}
}
```

编译并运行上面的程序，产生如下结果：

```
Passed Name is : tommy
Puppy's age is : 2
Variable Value : 2
```


--------


#### 源文件声明规则
{:.no_toc}

当在一个源文件中定义多个类，并且还有import语句和package语句时，要特别注意这些规则。

* 一个源文件中只能有一个public类
* 一个源文件可以有多个非public类
* 源文件的名称应该和public类的类名保持一致。  
  例如：源文件中public类的类名是Employee，那么源文件应该命名为Employee.java。
* 如果一个类定义在某个包中，那么package语句应该在源文件的首行。
* 如果源文件包含import语句，那么应该放在package语句和类定义之间。  
  如果没有package语句，那么import语句应该在源文件中最前面。
* import语句和package语句对源文件中定义的所有类都有效。  
  在同一源文件中，不能给不同的类不同的包声明。

类有若干种访问级别，并且类也分不同的类型：抽象类和final类等。这些将在访问控制章节介绍。  
除了上面提到的几种类型，Java还有一些特殊的类，如：内部类、匿名类。


--------


##### Java 包
{:.no_toc}

包主要用来对类和接口进行分类。当开发Java程序时，可能编写成百上千的类，因此很有必要对类和接口进行分类。


--------


##### Import 语句
{:.no_toc}

在Java中，如果给出一个完整的限定名，包括包名、类名，那么Java编译器就可以很容易地定位到源代码或者类。  
Import语句就是用来提供一个合理的路径，使得编译器可以找到某个类。

例如，下面的命令行将会命令编译器载入`java_installation/java/io`路径下的所有类

    import java.io.*;


--------


##### 一个简单的案例
{:.no_toc}

在该案例中，我们创建两个类：Employee和EmployeeTest。  
首先打开文本编辑器，把下面的代码粘贴进去，以 `Employee.java` 为文件名保存这个源文件。  
Employee类有四个成员变量，name、age、designation、salary。  
该类显式声明了一个构造方法，该方法只有一个参数。

```java
import java.io.*;

public class Employee {
	String name;
	int age;
	String designation;
	double salary;

	// Employee 类的构造器
	public Employee(String name) {
		this.name = name;
	}

	// 设置age的值
	public void empAge(int empAge) {
		age = empAge;
	}

	/* 设置designation的值 */
	public void empDesignation(String empDesig) {
		designation = empDesig;
	}

	/* 设置salary的值 */
	public void empSalary(double empSalary) {
		salary = empSalary;
	}

	/* 打印信息 */
	public void printEmployee() {
		System.out.println("Name:" + name);
		System.out.println("Age:" + age);
		System.out.println("Designation:" + designation);
		System.out.println("Salary:" + salary);
	}
}
```

程序都是从main方法开始执行。为了能运行这个程序，必须包含main方法并且创建一个实例对象。  
下面给出EmployeeTest类，该类实例化2个Employee类的实例，并调用方法设置变量的值。  
将下面的代码保存在EmployeeTest.java文件中。

```java
import java.io.*;

public class EmployeeTest {

	public static void main(String args[]) {
		/* 使用构造器创建两个对象 */
		Employee empOne = new Employee("James Smith");
		Employee empTwo = new Employee("Mary Anne");

		// 调用这两个对象的成员方法
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

编译这两个文件并且运行EmployeeTest类，可以看到如下结果：

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


--------


# 6. Java 修饰符

Java语言提供了很多修饰符，主要分为以下两类：

* 访问修饰符
* 非访问修饰符

修饰符用来定义类、方法或者变量，通常放在语句的最前端。我们通过下面的例子来说明：

```java
public class className {
	// ...
	
	private boolean myFlag;
	static final double weeks = 9.5;
	protected static final int BOXWIDTH = 42;

	public static void main(String[] arguments) {
	   // 方法体
	}
}
```


--------


#### 访问控制修饰符
{:.no_toc}

Java中，可以使用访问控制符来保护对类、变量、方法和构造方法的访问。Java支持4种不同的访问权限。

* 默认的，也称为 **default**，在同一包内可见，不使用任何修饰符。
* 私有的，以 **private** 修饰符指定，在同一类内可见。
* 公有的，以 **public** 修饰符指定，对所有类可见。
* 受保护的，以 **protected** 修饰符指定，对同一包内的类和所有子类可见。

##### 默认访问修饰符-不使用任何关键字
{:.no_toc}

使用默认访问修饰符声明的变量和方法，对同一个包内的类是可见的。  
接口里的变量都隐式声明为public static final,而接口里的方法默认情况下访问权限为public。

**实例：**如下例所示，变量和方法的声明可以不使用任何修饰符

```java

	String version = "1.5.1";

	boolean processOrder() {
		return true;
	}
```

##### 私有访问修饰符-private
{:.no_toc}

私有访问修饰符是最严格的访问级别，所以被声明为private的方法、变量和构造方法只能被所属类访问，并且类和接口不能声明为private。  
声明为私有访问类型的变量只能通过类中公共的getter方法被外部类访问。  
Private访问修饰符的使用主要用来隐藏类的实现细节和保护类的数据。

**实例：**下面的类使用了私有访问修饰符

```java
public class Logger {
	private String format;

	public String getFormat() {
		return this.format;
	}

	public void setFormat(String format) {
		this.format = format;
	}
}
```

> 实例中，Logger类中的format变量为私有变量，所以其他类不能直接得到和设置该变量的值。为了使其他类能够操作该变量，定义了两个public方法：getFormat() （返回format的值）和setFormat(String)（设置format的值）

##### 公有访问修饰符-public
{:.no_toc}

被声明为public的类、方法、构造方法和接口能够被任何其他类访问。  
如果几个相互访问的public类分布在不同的包中，则需要导入相应public类所在的包。由于类的继承性，类所有的公有方法和变量都能被其子类继承。

**实例：**以下函数使用了公有访问控制

```java
public static void main(String[] arguments) {
	   // ...
	}
```

> Java程序的main() 方法必须设置成公有的，否则，Java解释器将不能运行该类。

##### 受保护的访问修饰符-protected
{:.no_toc}

被声明为protected的变量、方法和构造器能被同一个包中的任何其他类访问，也能够被不同包中的子类访问。  
Protected访问修饰符不能修饰类和接口，方法和成员变量能够声明为protected，但是接口的成员变量和成员方法不能声明为protected。  
子类能访问Protected修饰符声明的方法和变量，这样就能保护不相关的类使用这些方法和变量。

**实例：**下面的父类使用了protected访问修饰符，子类重载了父类的openSpeaker()方法

```java
class AudioPlayer {
	protected boolean openSpeaker(Speaker sp) {
		// 实现细节
	}
}

class StreamingAudioPlayer {
	boolean openSpeaker(Speaker sp) {
		// 实现细节
	}
}
```

> 如果把openSpeaker()方法声明为private，那么除了AudioPlayer之外的类将不能访问该方法。如果把openSpeaker()声明为public，那么所有的类都能够访问该方法。如果我们只想让该方法对其所在类的子类可见，则将该方法声明为protected。

#### 访问控制和继承
{:.no_toc}

请注意以下方法继承的规则：

* 父类中声明为public的方法在子类中也必须为public。
* 父类中声明为protected的方法在子类中要么声明为protected，要么声明为public。不能声明为private。
* 父类中声明为private的方法，不能够被继承。


--------


#### 非访问修饰符
{:.no_toc}

为了实现一些其他的功能，Java也提供了许多非访问修饰符。

* static修饰符，用来创建类方法和类变量。
* Final修饰符，用来修饰类、方法和变量，final修饰的类不能够被继承，修饰的方法不能被继承类重新定义，修饰的变量为常量，是不可修改的。
* Abstract修饰符，用来创建抽象类和抽象方法。
* Synchronized和volatile修饰符，主要用于线程的编程。

##### Static修饰符
{:.no_toc}

*  静态变量：Static关键字用来声明独立于对象的静态变量，无论一个类实例化多少对象，它的静态变量只有一份拷贝。 静态变量也被称为类变量。局部变量能被声明为static变量。
* 静态方法：Static关键字用来声明独立于对象的静态方法。静态方法不能使用类的非静态变量。静态方法从参数列表得到数据，然后计算这些数据。

对类变量和方法的访问可以直接使用classname.variablename和classname.methodname的方式访问。

**实例：**如下例所示，static修饰符用来创建类方法和类变量

```java
public class InstanceCounter {
	private static int numInstances = 0;

	protected static int getCount() {
		return numInstances;
	}

	private static void addInstance() {
		numInstances++;
	}

	InstanceCounter() {
		InstanceCounter.addInstance();
	}

	public static void main(String[] arguments) {
		System.out.println("Starting with " + InstanceCounter.getCount() + " instances");
		for (int i = 0; i < 500; ++i) {
			new InstanceCounter();
		}
		System.out.println("Created " + InstanceCounter.getCount() + " instances");
	}
}
```

编译并运行上面的程序，产生如下结果：

```
Started with 0 instances
Created 500 instances
```

##### Final修饰符
{:.no_toc}

* **Final变量：**Final变量能被显式地初始化并且只能初始化一次。被声明为final的对象的引用不能指向不同的对象。但是final对象里的数据可以被改变。也就是说final对象的引用不能改变，但是里面的值可以改变。  
Final修饰符通常和static修饰符一起使用来创建类常量。

  **实例：**

  ```java
public class Test {
	final int value = 10;
	// 下面是声明常量的实例
	public static final int BOXWIDTH = 6;
	static final String TITLE = "Manager";

	public void changeValue() {
		value = 12; // 将输出一个错误
	}
}
```

* **Final方法：**类中的Final方法可以被子类继承，但是不能被子类修改。声明final方法的主要目的是防止该方法的内容被修改。

  **实例：**如下所示，使用final修饰符声明方法

  ```java
public class Test {
	public final void changeName() {
		// 方法体
	}
}
```

* **Final类：**Final类不能被继承，没有类能够继承final类的任何特性。

  **实例：**

  ```java
public final class Test {
	// 类体
}
```

##### Abstract修饰符
{:.no_toc}

* **抽象类：**抽象类不能用来实例化对象，声明抽象类的唯一目的是为了将来对该类进行扩充。
一个类不能同时被abstract和final修饰。如果一个类包含抽象方法，那么该类一定要声明为抽象类，否则将出现编译错误。
抽象类可以包含抽象方法和非抽象方法。

  **实例：**

  ```java
abstract class Caravan {
	private double price;
	private String model;
	private String year;

	public abstract void goFast(); // 抽象方法

	public abstract void changeColor();
}
```


* 抽象方法：抽象方法是一种没有任何实现的方法，该方法的的具体实现由子类提供。抽象方法不能被声明成final和strict。
任何继承抽象类的子类必须实现父类的所有抽象方法，除非该子类也是抽象类。
如果一个类包含若干个抽象方法，那么该类必须声明为抽象类。抽象类可以不包含抽象方法。
抽象方法的声明以分号结尾，例如：`public abstract sample()`;

  **实例：**

  ```java
public abstract class SuperClass {
	abstract void m(); // 抽象方法
}

  class SubClass extends SuperClass {
	// 实现抽象方法
	void m() {
	.........
	}
}
```

##### Synchronized修饰符
{:.no_toc}

Synchronized关键字声明的方法同一时间只能被一个线程访问。Synchronized修饰符可以应用于四个访问修饰符。

**实例：**

```java
public synchronized void showDetails() {
.......
}
```

##### Transient修饰符
{:.no_toc}

序列化的对象包含被transient修饰的实例变量时，java虚拟机(JVM)跳过该特定的变量。  
该修饰符包含在定义变量的语句中，用来预处理类和变量的数据类型。

**实例：**

```java
public transient int limit = 55;   // will not persist
public int b; // will persist
```

##### Volatile修饰符
{:.no_toc}

Volatile 修饰的成员变量在每次被线程访问时，都强制从共享内存中重新读取该成员变量的值。而且，当成员变量发生变化时，会强制线程将变化值回写到共享内存。这样在任何时刻，两个不同的线程总是看到某个成员变量的同一个值。  
一个volatile对象引用可能是null。

**实例：**

```java
public class MyRunnable implements Runnable {
	private volatile boolean active;

	public void run() {
		active = true;
		while (active) // 第一行
		{
			// 代码
		}
	}

	public void stop() {
		active = false; // 第二行
	}
}
```
> 通常情况下，在一个线程调用 run() 方法（在 Runnable 开启的线程），在另一个线程调用 stop() 方法。 如果 第一行 中缓冲区的 active 值被使用，那么在 第二行 的 active 值为 false 时循环不会停止。但是以上代码中我们使用了 volatile 修饰 active，所以该循环会停止。


--------


# 7. Java 基本数据类型

变量就是申请内存来存储值。也就是说，当创建变量的时候，需要在内存中申请空间。  
内存管理系统根据变量的类型为变量分配存储空间，分配的空间只能用来储存该类型数据。  
因此，通过定义不同类型的变量，可以在内存中储存整数、小数或者字符。

Java的两大数据类型:

* 内置数据类型
* 引用数据类型()


--------


#### 内置数据类型
{:.no_toc}

Java语言提供了八种基本类型。六种数字类型（四个整数型，两个浮点型），一种字符类型，还有一种布尔型。

##### 字节型（byte）
{:.no_toc}

* byte数据类型是8位、有符号的，以二进制补码表示的整数
* 最小值是 -128(-2^7)
* 最大值是 127(2^7-1)
* 默认值为 0
* byte类型用在大型数组中节约空间，主要代替整数，因为byte变量占用的空间只有int类型的四分之一
* 例如：`byte a = 100 , byte b = -50`

##### 短整数（short）
{:.no_toc}

* short数据类型是16位、有符号的，以二进制补码表示的整数
* 最小值是 -32768(-2^15)
* 最大值是 32767(2^15-1)
* Short数据类型也可以像byte那样节省空间。一个short变量是int型变量所占空间的二分之一
* 默认值为 0
* 例如：`short s = 10000, short r = -20000`

##### 整数型（int）
{:.no_toc}

* long数据类型是64位、有符号的，以二进制补码表示的整数
* 最小值是 - 2,147,483,648(-2^31)
* 最大值是 2,147,483,647(2^31 -1)
* 一般地整型变量默认为int类型，除非担心内存不够用
* 默认值为 0
* 例如：`int a = 100000, int b = -200000`

##### 长整型（long）
{:.no_toc}

* long数据类型是64位、有符号的，以二进制补码表示的整数
* 最小值是 -9,223,372,036,854,775,808(-2^63)
* 最大值是 9,223,372,036,854,775,807 (2^63 -1)
* 这种类型主要使用在需要比较大整数的系统上
* 默认值为 0L
* 例如：`long a = 100000L, int b = -200000L`

##### 浮点型（float）
{:.no_toc}

* float数据类型是单精度、32位、符合IEEE 754标准的浮点数
* float在储存大型浮点数组的时候可节省内存空间
* 默认值是 0.0f
* 浮点数不能用来表示精确的值，如货币
* 例如：`float f1 = 234.5f`

##### 双精度型（double）
{:.no_toc}

* double数据类型是双精度、64位、符合IEEE 754标准的浮点数
* 浮点数的默认类型为double类型
* double类型同样不能表示精确的值，如货币
* 默认值是 0.0d
* 例如：`double d1 = 123.4`

##### 布尔型（boolean）
{:.no_toc}

* boolean数据类型表示一位的信息
* 只有两个取值：true和false
* 这种类型只作为一种标志来记录true/false情况
* 默认值是false
* 例如：`boolean one = true`

##### 字符型（char）
{:.no_toc}

* char类型是一个单一的16位Unicode字符
* 最小值是： '\u0000' (或 0)
* 最大值是： '\uffff' (或 65,535 )
* char数据类型可以储存任何字符
* 例如： `char letter A ='A'`

**实例：**  
对于数值类型的基本类型的取值范围，我们无需强制去记忆，因为它们的值都已经以常量的形式定义在对应的包装类中了。请看下面的例子：

```java
public class PrimitiveTypeTest {
	public static void main(String[] args) {
		// byte
		System.out.println("基本类型：byte 二进制位数：" + Byte.SIZE);
		System.out.println("包装类：java.lang.Byte");
		System.out.println("最小值：Byte.MIN_VALUE=" + Byte.MIN_VALUE);
		System.out.println("最大值：Byte.MAX_VALUE=" + Byte.MAX_VALUE);
		System.out.println();

		// short
		System.out.println("基本类型：short 二进制位数：" + Short.SIZE);
		System.out.println("包装类：java.lang.Short");
		System.out.println("最小值：Short.MIN_VALUE=" + Short.MIN_VALUE);
		System.out.println("最大值：Short.MAX_VALUE=" + Short.MAX_VALUE);
		System.out.println();

		// int
		System.out.println("基本类型：int 二进制位数：" + Integer.SIZE);
		System.out.println("包装类：java.lang.Integer");
		System.out.println("最小值：Integer.MIN_VALUE=" + Integer.MIN_VALUE);
		System.out.println("最大值：Integer.MAX_VALUE=" + Integer.MAX_VALUE);
		System.out.println();

		// long
		System.out.println("基本类型：long 二进制位数：" + Long.SIZE);
		System.out.println("包装类：java.lang.Long");
		System.out.println("最小值：Long.MIN_VALUE=" + Long.MIN_VALUE);
		System.out.println("最大值：Long.MAX_VALUE=" + Long.MAX_VALUE);
		System.out.println();

		// float
		System.out.println("基本类型：float 二进制位数：" + Float.SIZE);
		System.out.println("包装类：java.lang.Float");
		System.out.println("最小值：Float.MIN_VALUE=" + Float.MIN_VALUE);
		System.out.println("最大值：Float.MAX_VALUE=" + Float.MAX_VALUE);
		System.out.println();

		// double
		System.out.println("基本类型：double 二进制位数：" + Double.SIZE);
		System.out.println("包装类：java.lang.Double");
		System.out.println("最小值：Double.MIN_VALUE=" + Double.MIN_VALUE);
		System.out.println("最大值：Double.MAX_VALUE=" + Double.MAX_VALUE);
		System.out.println();

		// char
		System.out.println("基本类型：char 二进制位数：" + Character.SIZE);
		System.out.println("包装类：java.lang.Character");
		// 以数值形式而不是字符形式将Character.MIN_VALUE输出到控制台
		System.out.println("最小值：Character.MIN_VALUE=" + (int) Character.MIN_VALUE);
		// 以数值形式而不是字符形式将Character.MAX_VALUE输出到控制台
		System.out.println("最大值：Character.MAX_VALUE=" + (int) Character.MAX_VALUE);
	}
}
```

<ul class="pager">
<li class="previous">
<a target="_blank" href="http://www.runoob.com/try/runcode.php?filename=PrimitiveTypeTest&type=java" data-toggle="tooltip" data-placement="top" title="运行实例">运行实例</a>
</li>
</ul>

编译以上代码输出结果如下所示：

```
基本类型：byte 二进制位数：8
包装类：java.lang.Byte
最小值：Byte.MIN_VALUE=-128
最大值：Byte.MAX_VALUE=127

基本类型：short 二进制位数：16
包装类：java.lang.Short
最小值：Short.MIN_VALUE=-32768
最大值：Short.MAX_VALUE=32767

基本类型：int 二进制位数：32
包装类：java.lang.Integer
最小值：Integer.MIN_VALUE=-2147483648
最大值：Integer.MAX_VALUE=2147483647

基本类型：long 二进制位数：64
包装类：java.lang.Long
最小值：Long.MIN_VALUE=-9223372036854775808
最大值：Long.MAX_VALUE=9223372036854775807

基本类型：float 二进制位数：32
包装类：java.lang.Float
最小值：Float.MIN_VALUE=1.4E-45
最大值：Float.MAX_VALUE=3.4028235E38

基本类型：double 二进制位数：64
包装类：java.lang.Double
最小值：Double.MIN_VALUE=4.9E-324
最大值：Double.MAX_VALUE=1.7976931348623157E308

基本类型：char 二进制位数：16
包装类：java.lang.Character
最小值：Character.MIN_VALUE=0
最大值：Character.MAX_VALUE=65535
```

> Float和Double的最小值和最大值都是以科学记数法的形式输出的，结尾的"E+数字"表示E之前的数字要乘以10的多少次方。比如3.14E3就是3.14 × 10^3 =3140，3.14E-3 就是 3.14 x 10^-3 =0.00314。  
> 实际上，JAVA中还存在另外一种基本类型void，它也有对应的包装类 java.lang.Void，不过我们无法直接对它们进行操作。


--------


#### 引用数据类型
{:.no_toc}

* 引用类型变量由类的构造函数创建，可以使用它们访问所引用的对象。这些变量在声明时被指定为一个特定的类型，比如Employee、Pubby等。变量一旦声明后，类型就不能被改变了。
* 对象、数组都是引用数据类型。
* 所有引用类型的默认值都是null。
* 一个引用变量可以用来引用与任何与之兼容的类型。
* 例如：`Site site = new Site("Runoob")；`


--------


#### Java 常量
{:.no_toc}

常量是在程序运行时，不会被修改的量。  
在 Java 中使用 final 关键字来修饰常量，声明方式和变量类似：

    final double PI = 3.1415927;
    
虽然常量名也可以用小写，但为了便于识别，通常使用大写字母表示常量。  
字面量可以赋给任何内置类型的变量。例如：

```
byte a = 68;
char a = 'A';
```

byte、int、long、和short都可以用十进制、16进制以及8进制的方式来表示。  
当使用常量的时候，前缀0表示8进制，而前缀0x代表16进制。例如：

```
int decimal = 100;
int octal = 0144;
int hexa = 0x64;
```

和其他语言一样，Java的字符串常量也是包含在两个引号之间的字符序列。下面是字符串型字面量的例子：

```
"Hello World"
"two\nlines"
"\"This is in quotes\""
```

字符串常量和字符常量都可以包含任何Unicode字符。例如：

```
char a = '\u0001';
String a = "\u0001";
```

Java语言支持一些特殊的转义字符序列。

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
|`\\`|	反斜杠|
|`\ddd`|八进制字符 (ddd)|
|`\uxxxx`|十六进制 UNICODE 字符 (xxxx)|

> 注意：String不属于8种基本数据类型（byte, char, short, int, float, long, double, boolean），String是一个对象，因为对象的默认值是null，所以String的默认值也是null；但它又是一种特殊的对象，有其它对象没有的一些特性。new String()和new String(“”)都是申明一个新的空字符串，是空串不是null；

# 8. Java 变量类型

在Java语言中，所有的变量在使用前必须声明。声明变量的基本格式如下：

    type identifier [ = value][, identifier [= value] ...] ;


格式说明：type为Java数据类型。identifier是变量名。可以使用逗号隔开来声明多个同类型变量。

以下列出了一些变量的声明实例。注意有些包含了初始化过程。

```java
int a, b, c;			// 声明三个int型整数：a、 b、c
int d = 3, e, f = 5;	// 声明三个整数并赋予初值
byte z = 22;			// 声明并初始化 z
String s = "runoob";	// 声明并初始化字符串 s
double pi = 3.14159;	// 声明了双精度浮点型变量 pi
char x = 'x';			// 声明变量 x 的值是字符 'x'
```

Java语言支持的变量类型有：

* 局部变量
* 实例变量
* 类变量


--------


#### 局部变量
{:.no_toc}

* 局部变量声明在方法、构造方法或者语句块中；
* 局部变量在方法、构造方法、或者语句块被执行的时候创建，当它们执行完成后，变量将会被销毁；
* 访问修饰符不能用于局部变量；
* 局部变量只在声明它的方法、构造方法或者语句块中可见；
* 局部变量是在栈上分配的。
* 局部变量没有默认值，所以局部变量被声明后，必须经过初始化，才可以使用。

**实例1：**  
在以下实例中age是一个局部变量。定义在pubAge()方法中，它的作用域就限制在这个方法中。

```java
public class Test {
	public void pupAge() {
		int age = 0;
		age = age + 7;
		System.out.println("小狗的年龄是：" + age);
	}

	public static void main(String args[]) {
		Test test = new Test();
		test.pupAge();
	}
}
```
编译以上代码输出结果如下所示：

    小狗的年龄是：7

**实例2：**  
在下面的例子中age变量没有初始化，所以在编译时会出错：

```java
public class Test {
	public void pupAge() {
		int age;
		age = age + 7;
		System.out.println("小狗的年龄是 : " + age);
	}

	public static void main(String args[]) {
		Test test = new Test();
		test.pupAge();
	}
}
```
编译以上代码输出结果如下所示：

```
Exception in thread "main" java.lang.Error: 无法解析的编译问题：
	局部变量 age 可能尚未初始化

	at myFirstJavaProgram.Test.pupAge(Test.java:6)
	at myFirstJavaProgram.Test.main(Test.java:12)

```


--------


#### 实例变量
{:.no_toc}

* 实例变量在类中声明，但在方法、构造方法和语句块之外。
* 当一个对象被实例化之后，每个实例变量的值就跟着确定。
* 实例变量在对象创建的时候创建，在对象被销毁的时候销毁。
* 实例变量的值应该至少被一个方法、构造方法或者语句块引用，使得外部能够通过这些方式获取实例变量信息。
* 实例变量可以声明在使用前或者使用后。
* 访问修饰符可以修饰实例变量。
* 实例变量对于类中的方法、构造方法或者语句块是可见的。一般情况下应该把实例变量设为私有。通过使用访问修饰符可以使实例变量对子类可见。
* 实例变量具有默认值。数值型变量的默认值是0，布尔型变量的默认值是false，引用类型变量的默认值是null。变量的值可以在声明时指定，也可以在构造方法中指定。
* 实例变量可以直接通过变量名访问。但在静态方法以及其他类中，就应该使用完全限定名：ObejectReference.VariableName。

**实例：**

```java
import java.io.*;

public class Employee {
	// 这个成员变量对子类可见
	public String name;
	// 私有变量，仅在该类可见
	private double salary;

	// 在构造器中对name赋值
	public Employee(String empName) {
		name = empName;
	}

	// 设定salary的值
	public void setSalary(double empSal) {
		salary = empSal;
	}

	// 打印信息
	public void printEmp() {
		System.out.println("name  : " + name);
		System.out.println("salary :" + salary);
	}

	public static void main(String args[]) {
		Employee empOne = new Employee("Ransika");
		empOne.setSalary(1000);
		empOne.printEmp();
	}
}
```

编译以上代码输出结果如下所示：

```
name  : Ransika
salary :1000.0
```


--------


#### 类变量（静态变量）
{:.no_toc}

* 类变量也称为静态变量，在类中以static关键字声明，但必须在方法构造方法和语句块之外。
* 无论一个类创建了多少个对象，类只拥有类变量的一份拷贝。
* 静态变量除了被声明为常量外很少使用。常量是指声明为public/private，final和static类型的变量。常量初始化后不可改变。
* 静态变量储存在静态存储区。经常被声明为常量，很少单独使用static声明变量。
* 静态变量在程序开始时创建，在程序结束时销毁。
* 与实例变量具有相似的可见性。但为了对类的使用者可见，大多数静态变量声明为public类型。
* 默认值和实例变量相似。数值型变量默认值是0，布尔型默认值是false，引用类型默认值是null。变量的值可以在声明的时候指定，也可以在构造方法中指定。此外，静态变量还可以在静态语句块中初始化。
* 静态变量可以通过：ClassName.VariableName的方式访问。
* 类变量被声明为public static final类型时，类变量名称必须使用大写字母。如果静态变量不是public和final类型，其命名方式与实例变量以及局部变量的命名方式一致。

**实例：**

```java
import java.io.*;

public class Employee {
	// salary是静态的私有变量
	private static double salary;
	// DEPARTMENT是一个常量
	public static final String DEPARTMENT = "开发人员";

	public static void main(String args[]) {
		salary = 10000;
		System.out.println(DEPARTMENT + "平均工资:" + salary);
	}
}
```

编译以上代码输出结果如下所示：

    开发人员平均工资:10000.0

> **注意：**如果其他类想要访问该变量，可以这样访问：Employee.DEPARTMENT。

# 9. Java 运算符

计算机的最基本用途之一就是执行数学运算，作为一门计算机语言，Java也提供了一套丰富的运算符来操纵变量。我们可以把运算符分成以下几组：

* 算术运算符
* 关系运算符
* 位运算符
* 逻辑运算符
* 赋值运算符
* 其他运算符


--------

#### 算术运算符
{:.no_toc}

算术运算符用在数学表达式中，它们的作用和在数学中的作用一样。下表列出了所有的算术运算符。
表格中的实例假设整数变量A的值为10，变量B的值为20：

|操作符|	描述	|例子|
|:---:|:---:|:---:|
|+|	加法 - 相加运算符两侧的值	|A + B等于30|
|-|	减法 - 左操作数减去右操作数	|A – B等于-10|
|*|	乘法 - 相乘操作符两侧的值	|A * B等于200|
|/|	除法 - 左操作数除以右操作数	|B / A等于2|
|％|	取模 - 右操作数除左操作数的余数	|B%A等于0|
|+ +|	自增 - 操作数的值增加1	|B + +等于21|
|- -|	自减 -- 操作数的值减少1	|B - -等于19|

**实例：**
下面的简单示例程序演示了算术运算符。复制并粘贴下面的Java程序并保存为Test.java文件，然后编译并运行这个程序：

```java
public class Test {

	public static void main(String args[]) {
		int a = 10;
		int b = 20;
		int c = 25;
		int d = 25;
		System.out.println("a + b = " + (a + b));
		System.out.println("a - b = " + (a - b));
		System.out.println("a * b = " + (a * b));
		System.out.println("b / a = " + (b / a));
		System.out.println("b % a = " + (b % a));
		System.out.println("c % a = " + (c % a));
		System.out.println("a++   = " + (a++));
		System.out.println("a--   = " + (a--));
		// 查看 d++ 与 ++d 的不同
		System.out.println("d++   = " + (d++));
		System.out.println("++d   = " + (++d));
	}
}
```
<ul class="pager">
<li class="previous">
<a target="_blank" href="http://www.runoob.com/try/runcode.php?filename=test_operator&type=java" data-toggle="tooltip" data-placement="top" title="运行实例">运行实例</a>
</li>
</ul>

以上实例编译运行结果如下：

```
a + b = 30
a - b = -10
a * b = 200
b / a = 2
b % a = 0
c % a = 5
a++   = 10
a--   = 11
d++   = 25
++d   = 27
```


--------

#### 关系运算符
{:.no_toc}

下表为Java支持的关系运算符  
表格中的实例整数变量A的值为10，变量B的值为20：

|	运算符	|	描述		|	例子 	|
|:---:|:---|:---|
|	==	|	检查如果两个操作数的值是否相等，如果相等则条件为真。	|(A == B) false|
|	! =	|	检查如果两个操作数的值是否相等，如果值不相等则条件为真。	|(A ! = B) true|
|	>	| 	检查左操作数的值是否大于右操作数的值，如果是那么条件为真。	|(A > B) false|
|	<	|	检查左操作数的值是否小于右操作数的值，如果是那么条件为真。	|(A < B) true|
|	> =	|	检查左操作数的值是否大于或等于右操作数的值，如果是那么条件为真。	|(A > = B) false|
|	< =	|	检查左操作数的值是否小于或等于右操作数的值，如果是那么条件为真。	|(A < = B) true|

**实例：**  
下面的简单示例程序演示了关系运算符。复制并粘贴下面的Java程序并保存为Test.java文件，然后编译并运行这个程序：

```java
public class Test {

	public static void main(String args[]) {
		int a = 10;
		int b = 20;
		System.out.println("a == b = " + (a == b));
		System.out.println("a != b = " + (a != b));
		System.out.println("a > b = " + (a > b));
		System.out.println("a < b = " + (a < b));
		System.out.println("b >= a = " + (b >= a));
		System.out.println("b <= a = " + (b <= a));
	}
}
```

以上实例编译运行结果如下：

```
a == b = false
a != b = true
a > b = false
a < b = true
b >= a = true
b <= a = false
```


--------


#### 位运算符
{:.no_toc}

Java定义了位运算符，应用于整数类型(int)，长整型(long)，短整型(short)，字符型(char)，和字节型(byte)等类型。  
位运算符作用在所有的位上，并且按位运算。假设a = 60，b = 13;它们的二进制格式表示将如下：

```java
A = 0011 1100
B = 0000 1101
-----------------
A&b = 0000 1100
A | B = 0011 1101
^ B = 0011 0001
~A= 1100 0011
```

下表列出了位运算符的基本运算,假设整数变量A的值为60和变量B的值为13：

|操作符|	描述	|例子|
|:---:|:---|:---|
|＆|	按位与操作符，当且仅当两个操作数的某一位都非0时候结果的该位才为1。	|（A＆B），得到12，即0000 1100|
|\||	按位或操作符，只要两个操作数的某一位有一个非0时候结果的该位就为1。	|（A \| B）得到61，即 0011 1101|
|^|	按位异或操作符，两个操作数的某一位不相同时候结果的该位就为1。	|（A ^ B）得到49，即 0011 0001|
|〜|	按位补运算符翻转操作数的每一位。	|（〜A）得到-61，即1100 0011|
|\<\<| 	按位左移运算符。左操作数按位左移右操作数指定的位数。	|A \<\< 2得到240，即 1111 0000|
|\>\>| 	按位右移运算符。左操作数按位右移右操作数指定的位数。	|A \>\> 2得到15即 1111|
|\>\>\>| 	按位右移补零操作符。左操作数的值按右操作数指定的位数右移，移动得到的空位以零填充。	|A\>\>\>2得到15即0000 1111|

**实例：** 下面的简单示例程序演示了位运算符

```java
public class Test {
	public static void main(String args[]) {
		int a = 60; /* 60 = 0011 1100 */
		int b = 13; /* 13 = 0000 1101 */
		int c = 0;
		c = a & b; /* 12 = 0000 1100 */
		System.out.println("a & b = " + c);

		c = a | b; /* 61 = 0011 1101 */
		System.out.println("a | b = " + c);

		c = a ^ b; /* 49 = 0011 0001 */
		System.out.println("a ^ b = " + c);

		c = ~a; /*-61 = 1100 0011 */
		System.out.println("~a = " + c);

		c = a << 2; /* 240 = 1111 0000 */
		System.out.println("a << 2 = " + c);

		c = a >> 2; /* 15 = 1111 */
		System.out.println("a >> 2  = " + c);

		c = a >>> 2; /* 15 = 0000 1111 */
		System.out.println("a >>> 2 = " + c);
	}
}
```

以上实例编译运行结果如下：

```
a & b = 12
a | b = 61
a ^ b = 49
~a = -61
a << 2 = 240
a >> 2  = 15
a >>> 2 = 15
```


--------


#### 逻辑运算符
{:.no_toc}

下表列出了逻辑运算符的基本运算，假设布尔变量A为真，变量B为假

|操作符|	描述	|例子|
|:---:|:---|:---|
|&&|	称为逻辑与运算符。当且仅当两个操作数都为真，条件才为真。	|（A && B）为false|
|\| \||	称为逻辑或操作符。如果任何两个操作数任何一个为真，条件为真。	|（A \| \| B）为true|
|！|	称为逻辑非运算符。用来反转操作数的逻辑状态。如果条件为true，则逻辑非运算符将得到false。	|！（A && B）为true|

**实例：**下面的简单示例程序演示了逻辑运算符

```java
public class Test {
	public static void main(String args[]) {
		boolean a = true;
		boolean b = false;
		System.out.println("a && b = " + (a && b));
		System.out.println("a || b = " + (a || b));
		System.out.println("!(a && b) = " + !(a && b));
	}
}
```

以上实例编译运行结果如下：

```
a && b = false
a || b = true
!(a && b) = true
```



--------


#### 赋值运算符
{:.no_toc}

下面是Java语言支持的赋值运算符：

|操作符|	描述	|例子|
|:---:|:---|:---|
|=|	简单的赋值运算符，将右操作数的值赋给左侧操作数	|C = A + B将把A + B得到的值赋给C|
|+ =|	加和赋值操作符，它把左操作数和右操作数相加赋值给左操作数	|C + = A等价于C = C + A|
|- =|	减和赋值操作符，它把左操作数和右操作数相减赋值给左操作数	|C - = A等价于C = C - A|
|* =|	乘和赋值操作符，它把左操作数和右操作数相乘赋值给左操作数	|C * = A等价于C = C * A|
|/ =|	除和赋值操作符，它把左操作数和右操作数相除赋值给左操作数	|C / = A等价于C = C / A|
|（％）=	|取模和赋值操作符，它把左操作数和右操作数取模后赋值给左操作数	|C％= A等价于C = C％A|
|\<\<=|	左移位赋值运算符	|C \<\<= 2等价于C = C \<\< 2|
|\>\>=|	右移位赋值运算符	|C \>\> = 2等价于C = C \>\> 2|
|＆=|	按位与赋值运算符	|C＆= 2等价于C = C＆2|
|^ =|	按位异或赋值操作符	|C ^ = 2等价于C = C ^ 2|
|\| =|	按位或赋值操作符	|C \| = 2等价于C = C \| 2|

**实例：**面的简单示例程序演示了赋值运算符

```java
public class Test {
	public static void main(String args[]) {
		int a = 10;
		int b = 20;
		int c = 0;
		c = a + b;
		System.out.println("c = a + b = " + c);
		c += a;
		System.out.println("c += a  = " + c);
		c -= a;
		System.out.println("c -= a = " + c);
		c *= a;
		System.out.println("c *= a = " + c);
		a = 10;
		c = 15;
		c /= a;
		System.out.println("c /= a = " + c);
		a = 10;
		c = 15;
		c %= a;
		System.out.println("c %= a  = " + c);
		c <<= 2;
		System.out.println("c <<= 2 = " + c);
		c >>= 2;
		System.out.println("c >>= 2 = " + c);
		c >>= 2;
		System.out.println("c >>= a = " + c);
		c &= a;
		System.out.println("c &= 2  = " + c);
		c ^= a;
		System.out.println("c ^= a   = " + c);
		c |= a;
		System.out.println("c |= a   = " + c);
	}
}
```

以上实例编译运行结果如下：

```
c = a + b = 30
c += a  = 40
c -= a = 30
c *= a = 300
c /= a = 1
c %= a  = 5
c <<= 2 = 20
c >>= 2 = 5
c >>= a = 1
c &= 2  = 0
c ^= a   = 10
c |= a   = 10

```


--------


#### 其他运算符
{:.no_toc}

##### 条件运算符（?:）
{:.no_toc}

条件运算符也被称为三元运算符。该运算符有3个操作数，并且需要判断布尔表达式的值。  
该运算符的主要是决定哪个值应该赋值给变量。

    variable x = (expression) ? value if true : value if false

**实例:**

```java
public class Test {
	public static void main(String args[]) {
		int a, b;
		a = 10;
		b = (a == 1) ? 20 : 30;
		System.out.println("Value of b is : " + b);
		b = (a == 10) ? 20 : 30;
		System.out.println("Value of b is : " + b);
	}
}
```

以上实例编译运行结果如下：

```
Value of b is : 30
Value of b is : 20
```

##### instanceOf 运算符
{:.no_toc}

该运算符用于操作对象实例，检查该对象是否是一个特定类型（类类型或接口类型）。

instanceof运算符使用格式如下：

    ( Object reference variable ) instanceOf  (class/interface type)

如果运算符左侧变量所指的对象，是操作符右侧类或接口(class/interface)的一个对象，那么结果为真。

下面是一个例子：

```java
String name = 'James';
boolean result = name instanceOf String; // 由于name是String类型，所以返回真
```

如果被比较的对象兼容于右侧类型,该运算符仍然返回true。

看下面的例子：

```java
class Vehicle {}

public class Car extends Vehicle {
	public static void main(String args[]) {
		Vehicle a = new Car();
		boolean result = a instanceof Car;
		System.out.println(result);
	}
}
```

以上实例编译运行结果如下：

    true

##### Java运算符优先级
{:.no_toc}

当多个运算符出现在一个表达式中，谁先谁后呢？这就涉及到运算符的优先级别的问题。在一个多运算符的表达式中，运算符优先级不同会导致最后得出的结果差别甚大。
例如，（1+3）＋（3+2）*2，这个表达式如果按加号最优先计算，答案就是 18，如果按照乘号最优先，答案则是 14。
再如，x = 7 + 3 * 2;这里x得到13，而不是20，因为乘法运算符比加法运算符有较高的优先级，所以先计算3 * 2得到6，然后再加7。

下表中具有最高优先级的运算符在的表的最上面，最低优先级的在表的底部。


|类别|	操作符	|关联性|
|:---:|:---|:---|
|后缀|	() [] . (点操作符)	|左到右|
|一元|	+ + - ！〜	|右到左|
|乘性| 	* /％	|左到右|
|加性| 	+ -	|左到右|
|移位| 	\>\> \>\>\>  \<\< 	|左到右|
|关系| 	\>\> = \<\< = 	|左到右|
|相等| 	==  !=	|左到右|
|按位与|	＆	|左到右|
|按位异或|	^	|左到右|
|按位或|	\|	|左到右|
|逻辑与|	&&	|左到右|
|逻辑或|	\| \|	|左到右|
|条件|	？：	|右到左|
|赋值|	= + = - = * = / =％= \>\> = \<\< =＆= ^ = \| =	|右到左|
|逗号|	，	|左到右|

# 10. Java 循环结构

顺序结构的程序语句只能被执行一次。如果您想要同样的操作执行多次,，就需要使用循环结构。

Java中有三种主要的循环结构：

* while循环
* do…while循环
* for循环（在Java5中引入了一种主要用于数组的增强型for循环。）


--------


##### while循环
{:.no_toc}

while是最基本的循环，它的结构为：

```java
while( 布尔表达式 ) {
	//循环内容
}
```

> 只要布尔表达式为true，循环体会一直执行下去。

**实例：**

```java
public class Test {
	public static void main(String args[]) {
		int x = 10;
		while (x < 20) {
			System.out.print("value of x : " + x);
			x++;
			System.out.print("\n");
		}
	}
}
```

以上实例编译运行结果如下：

```
value of x : 10
value of x : 11
value of x : 12
value of x : 13
value of x : 14
value of x : 15
value of x : 16
value of x : 17
value of x : 18
value of x : 19
```

##### do…while循环
{:.no_toc}

对于while语句而言，如果不满足条件，则不能进入循环。但有时候我们需要即使不满足条件，也至少执行一次。  
do…while循环和while循环相似，不同的是，do…while循环至少会执行一次。


```java
do {
    //代码语句
}while(布尔表达式);
```

> **注意：**布尔表达式在循环体的后面，所以语句块在检测布尔表达式之前已经执行了。 如果布尔表达式的值为true，则语句块一直执行，直到布尔表达式的值为false。

**实例：**

```java
public class Test {

	public static void main(String args[]) {
		int x = 10;

		do {
			System.out.print("value of x : " + x);
			x++;
			System.out.print("\n");
		} while (x < 20);
	}
}
```

以上实例编译运行结果如下：

```
value of x : 10
value of x : 11
value of x : 12
value of x : 13
value of x : 14
value of x : 15
value of x : 16
value of x : 17
value of x : 18
value of x : 19
```

##### for循环
{:.no_toc}

虽然所有循环结构都可以用while或者do...while表示，但Java提供了另一种语句—for循环，使一些循环结构变得更加简单。
for循环执行的次数是在执行前就确定的。语法格式如下：

```java
for(初始化; 布尔表达式; 更新) {
	//代码语句
}
```

关于for循环有以下几点说明：
* 最先执行初始化步骤。可以声明一种类型，但可初始化一个或多个循环控制变量，也可以是空语句。
* 然后，检测布尔表达式的值。如果为true，循环体被执行。如果为false，循环终止，开始执行循环体后面的语句。
* 执行一次循环后，更新循环控制变量。
* 再次检测布尔表达式。循环执行上面的过程。

**实例：**

```java
public class Test {

   public static void main(String args[]) {

      for(int x = 10; x < 20; x = x+1) {
         System.out.print("value of x : " + x );
         System.out.print("\n");
      }
   }
}
```

以上实例编译运行结果如下：

```
value of x : 10
value of x : 11
value of x : 12
value of x : 13
value of x : 14
value of x : 15
value of x : 16
value of x : 17
value of x : 18
value of x : 19
```

##### Java增强for循环
{:.no_toc}

Java5引入了一种主要用于数组的增强型for循环。
Java增强for循环语法格式如下:

```java
for(声明语句 : 表达式)
{
	//代码句子
}
```

> *声明语句：*声明新的局部变量，该变量的类型必须和数组元素的类型匹配。其作用域限定在循环语句块，其值与此时数组元素的值相等。
> *表达式：*表达式是要访问的数组名，或者是返回值为数组的方法。

**实例：**

```java
public class Test {

	public static void main(String args[]) {
		int[] numbers = { 10, 20, 30, 40, 50 };

		for (int x : numbers) {
			System.out.print(x);
			System.out.print(",");
		}
		System.out.print("\n");
		String[] names = { "James", "Larry", "Tom", "Lacy" };
		for (String name : names) {
			System.out.print(name);
			System.out.print(",");
		}
	}
}
```

以上实例编译运行结果如下：

```
10,20,30,40,50,
James,Larry,Tom,Lacy,
```


--------


##### break关键字
{:.no_toc}

break主要用在循环语句或者switch语句中，用来跳出整个语句块。  
break跳出最里层的循环，并且继续执行该循环下面的语句。

**语法：**break的用法很简单，就是循环结构中的一条语句：

    break;

**实例：**

```java
public class Test {

   public static void main(String args[]) {
      int [] numbers = {10, 20, 30, 40, 50};

      for(int x : numbers ) {
         if( x == 30 ) {
	      break;
         }
         System.out.print( x );
         System.out.print("\n");
      }
   }
}
```

以上实例编译运行结果如下：

```
10
20
```

##### continue关键字
{:.no_toc}

continue适用于任何循环控制结构中。作用是让程序立刻跳转到下一次循环的迭代。  
在for循环中，continue语句使程序立即跳转到更新语句。  
在while或者do…while循环中，程序立即跳转到布尔表达式的判断语句。

**语法：**continue就是循环体中一条简单的语句

    continue;

**实例：**

```java
public class Test {

	public static void main(String args[]) {
		int[] numbers = { 10, 20, 30, 40, 50 };

		for (int x : numbers) {
			if (x == 30) {
				continue;
			}
			System.out.print(x);
			System.out.print("\n");
		}
	}
}
```

以上实例编译运行结果如下：

```
10
20
40
50
```

# 11. Java 分支结构

顺序结构只能顺序执行，不能进行判断和选择，因此需要分支结构。

Java有两种分支结构：

* if语句
* switch语句


--------


##### if语句
{:.no_toc}

一个if语句包含一个布尔表达式和一条或多条语句。

**语法：**If语句的用语法如下

```java
if(布尔表达式)
{
	//如果布尔表达式为true将执行的语句
}
```

如果布尔表达式的值为true，则执行if语句中的代码块。否则执行If语句块后面的代码。

```java
public class Test {

	public static void main(String args[]) {
		int x = 10;

		if (x < 20) {
			System.out.print("这是 if 语句");
		}
	}
}
```

以上代码编译运行结果如下：

    这是 if 语句

##### if...else语句
{:.no_toc}

if语句后面可以跟else语句，当if语句的布尔表达式值为false时，else语句块会被执行。

**语法：**if…else的用法如下

```java
if(布尔表达式){
	//如果布尔表达式的值为true
}else{
	//如果布尔表达式的值为false
}
```

**实例：**

```java
public class Test {

	public static void main(String args[]) {
		int x = 30;

		if (x < 20) {
			System.out.print("这是 if 语句");
		} else {
			System.out.print("这是 else 语句");
		}
	}
}
```

以上代码编译运行结果如下：

    这是 else 语句

##### if...else if...else语句
{:.no_toc}

if语句后面可以跟elseif…else语句，这种语句可以检测到多种可能的情况。

使用if，else if，else语句的时候，需要注意下面几点：

* if语句至多有1个else语句，else语句在所有的elseif语句之后。
* If语句可以有若干个elseif语句，它们必须在else语句之前。
* 一旦其中一个else if语句检测为true，其他的else if以及else语句都将跳过执行。

**语法：**if...else语法格式如下

```java
if(布尔表达式 1){
	//如果布尔表达式 1的值为true执行代码
}else if(布尔表达式 2){
	//如果布尔表达式 2的值为true执行代码
}else if(布尔表达式 3){
	//如果布尔表达式 3的值为true执行代码
}else {
	//如果以上布尔表达式都不为true执行代码
}
```

**实例：**

```java
public class Test {

	public static void main(String args[]) {
		int x = 30;

		if (x == 10) {
			System.out.print("Value of X is 10");
		} else if (x == 20) {
			System.out.print("Value of X is 20");
		} else if (x == 30) {
			System.out.print("Value of X is 30");
		} else {
			System.out.print("This is else statement");
		}
	}
}
```

以上代码编译运行结果如下：

    Value of X is 30

##### 嵌套的if…else语句
{:.no_toc}

使用嵌套的if-else语句是合法的。也就是说你可以在另一个if或者elseif语句中使用if或者elseif语句。

**语法：**嵌套的if…else语法格式如下

```java
if(布尔表达式 1){
	//如果布尔表达式 1的值为true执行代码
   if(布尔表达式 2){
	//如果布尔表达式 2的值为true执行代码
   }
}
```

**实例：**

```java
public class Test {

	public static void main(String args[]) {
		int x = 30;
		int y = 10;

		if (x == 30) {
			if (y == 10) {
				System.out.print("X = 30 and Y = 10");
			}
		}
	}
}
```

以上代码编译运行结果如下：

    X = 30 and Y = 10

##### switch语句
{:.no_toc}

switch语句判断一个变量与一系列值中某个值是否相等，每个值称为一个分支。

**语法：**switch语法格式如下

```java
switch(expression){
	case value :
	//语句
	break; //可选
	case value :
	//语句
	break; //可选
	//你可以有任意数量的case语句
	default : //可选
	//语句
}
```

switch语句有如下规则：

* switch语句中的变量类型只能为byte、short、int或者char。
* switch语句可以拥有多个case语句。每个case后面跟一个要比较的值和冒号。
* case语句中的值的数据类型必须与变量的数据类型相同，而且只能是常量或者字面常量。
* 当变量的值与case语句的值相等时，那么case语句之后的语句开始执行，直到break语句出现才会跳出switch语句。
* 当遇到break语句时，switch语句终止。程序跳转到switch语句后面的语句执行。case语句不必须要包含break语句。如果* 没有break语句出现，程序会继续执行下一条case语句，直到出现break语句。
* switch语句可以包含一个default分支，该分支必须是switch语句的最后一个分支。default在没有case语句的值和变量值相等的时候执行。default分支不需要break语句。


**实例：**

```java
public class Test {

	public static void main(String args[]) {
		// char grade = args[0].charAt(0);
		char grade = 'C';

		switch (grade) {
		case 'A':
			System.out.println("Excellent!");
			break;
		case 'B':
		case 'C':
			System.out.println("Well done");
			break;
		case 'D':
			System.out.println("You passed");
		case 'F':
			System.out.println("Better try again");
			break;
		default:
			System.out.println("Invalid grade");
		}
		System.out.println("Your grade is " + grade);
	}
}
```

以上代码编译运行结果如下：

```
Well done
Your grade is C
````