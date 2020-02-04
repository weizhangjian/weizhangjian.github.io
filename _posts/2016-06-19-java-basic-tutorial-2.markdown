---
layout:     post
title:      "Java 基础教程（二）"
subtitle:   " \"Java语言快速入门\""
date:       2016-06-19 00:00:00
author:     "Mr.Wei"
header-img: "img/post-bg-about-java.jpg"
tags:
    - Java
---

> Write once,run anywhere!

### 目 录
{:.no_toc}
* 目录
{:toc}

# 12. Java Number类

一般地，当需要使用数字的时候，我们通常使用内置数据类型，如：byte、int、long、double等。

**实例：**

```java
int a = 5000;
float b = 13.65;
byte c = 0x4a;
```

然而，在实际开发过程中，我们经常会遇到需要使用对象，而不是内置数据类型的情形。为了解决这个问题，Java语言为每一个内置数据类型提供了对应的包装类。

所有的包装类（Integer、Long、Byte、Double、Float、Short）都是抽象类Number的子类。

![](/img/in-post/post-java-basic-tutorial/numbers.png)

这种由编译器特别支持的包装称为装箱，所以当内置数据类型被当作对象使用的时候，编译器会把内置类型装箱为包装类。相似的，编译器也可以把一个对象拆箱为内置类型。Number类属于java.lang包。

下面是一个使用 Integer 对象的实例：

```java
public class Test {

	public static void main(String args[]) {
		Integer x = 5;
		x = x + 10;
		System.out.println(x);
	}
}
```

以上实例编译运行结果如下：

    15

> 当x被赋为整型值时，由于x是一个对象，所以编译器要对x进行装箱。然后，为了使x能进行加运算，所以要对x进行拆箱。

##### Number 方法
{:.no_toc}

下面的表中列出的是 Number 子类实现的方法：

|序号|	方法|描述|
|:---:|:---:|:---|
|1|	xxxValue()|将number对象转换为xxx数据类型的值并返回。|
|2|	compareTo()|将number对象与参数比较。|
|3|	equals()|判断number对象是否与参数相等。|
|4|	valueOf()|返回一个 Number 对象指定的内置数据类型|
|5|	toString()|以字符串形式返回值。|
|6|	parseInt()|将字符串解析为int类型。|
|7|	abs()|返回参数的绝对值。|
|8|	ceil()|对整形变量向左取整，返回类型为double型。|
|9|	floor()|对整型变量向右取整。返回类型为double类型。|
|10|	rint()|返回与参数最接近的整数。返回类型为double。|
|11|	round()|返回一个最接近的int、long型值。|
|12|	min()|返回两个参数中的最小值。|
|13|	max()|返回两个参数中的最大值。|
|14|	exp()|返回自然数底数e的参数次方。|
|15|	log()|返回参数的自然数底数的对数值。|
|16|	pow()|返回第一个参数的第二个参数次方。|
|17|	sqrt()|求参数的算术平方根。|
|18|	sin()|求指定double类型参数的正弦值。|
|19|	cos()|求指定double类型参数的余弦值。|
|20|	tan()|求指定double类型参数的正切值。|
|21|	asin()|求指定double类型参数的反正弦值。|
|22|	acos()|求指定double类型参数的反余弦值。|
|23|	atan()|求指定double类型参数的反正切值。|
|24|	atan2()|将笛卡尔坐标转换为极坐标，并返回极坐标的角度值。|
|25|	toDegrees()|将参数转化为角度。|
|26|	toRadians()|将角度转换为弧度。|
|27|	random()|返回一个随机数。|

# 13. Java Character类

Character 类用于对单个字符进行操作。  
Character 类在对象中包装一个基本类型 char 的值

**实例：**

```java
char ch = 'a';

//Unicode 字符表示形式
char uniChar = '\u039A'; 

//字符数组
char[] charArray ={ 'a', 'b', 'c', 'd', 'e' };
```

然而，在实际开发过程中，我们经常会遇到需要使用对象，而不是内置数据类型的情况。为了解决这个问题，Java语言为内置数据类型char提供了包装类Character类。

Character类提供了一系列方法来操纵字符。你可以使用Character的构造方法创建一个Character类对象，例如：

```java
Character ch = new Character('a');
```

在某些情况下，Java编译器会自动创建一个Character对象。  
例如，将一个char类型的参数传递给需要一个Character类型参数的方法时，那么编译器会自动地将char类型参数转换为Character对象。 这种特征称为装箱，反过来称为拆箱。

**实例：**

```java
// 原始字符 'a' 装箱到 Character 对象 ch 中
Character ch = 'a';

// 原始字符 'x' 用 test 方法装箱
// 返回拆箱的值到 'c'
char c = test('x');
```

##### 转义序列
{:.no_toc}

前面有反斜杠（\）的字符代表转义字符，它对编译器来说是有特殊含义的。
下面列表展示了Java的转义序列：

|转义序列|	描述|

|\t|	在文中该处插入一个tab键|
|\b|	在文中该处插入一个后退键|
|\n|	在文中该处换行|
|\r|	在文中该处插入回车|
|\f|	在文中该处插入换页符|
|\\'|	在文中该处插入单引号|
|\\"|	在文中该处插入双引号|
| \\ \\ |	在文中该处插入反斜杠|

**实例：**

当打印语句遇到一个转义序列时，编译器可以正确地对其进行解释。

以下实例转义双引号并输出：

```java
public class Test {

	public static void main(String args[]) {
		System.out.println("访问\"菜鸟教程!\"");
	}
}
```

以上实例编译运行结果如下：

    访问"菜鸟教程!"

##### Character 方法
{:.no_toc}

下面是Character类的方法：

|序号|	方法|描述|
|:---:|:---:|:---|
|1|	isLetter()|是否是一个字母|
|2|	isDigit()|是否是一个数字字符|
|3|	isWhitespace()|是否一个空格|
|4|	isUpperCase()|是否是大写字母|
|5|	isLowerCase()|是否是小写字母|
|6|	toUpperCase()|指定字母的大写形式|
|7|	toLowerCase()|指定字母的小写形式|
|8|	toString()|返回字符的字符串形式，字符串的长度仅为1|

> 对于方法的完整列表，请参考的 [java.lang.Character API] (http://www.runoob.com/manual/jdk1.6/java/lang/Character.html)规范。

# 14. Java String类

字符串广泛应用在Java编程中，在Java中字符串属于对象，Java提供了String类来创建和操作字符串。


--------


##### 创建字符串
{:.no_toc}

创建字符串最简单的方式如下:

```java
String greeting = "Hello world!";
```

在代码中遇到字符串常量时，这里的值是"Hello world!"，编译器会使用该值创建一个String对象。
和其它对象一样，可以使用关键字和构造方法来创建String对象。
String类有11种构造方法，这些方法提供不同的参数来初始化字符串，比如提供一个字符数组参数:

```java
public class StringDemo {

	public static void main(String args[]) {
		char[] helloArray = { 'h', 'e', 'l', 'l', 'o', '.' };
		String helloString = new String(helloArray);
		System.out.println(helloString);
	}
}
```

以上实例编译运行结果如下：

    hello.

> 注意:String类是不可改变的，所以你一旦创建了String对象，那它的值就无法改变了。 如果需要对字符串做很多修改，那么应该选择使用[StringBuffer & StringBuilder 类](http://www.runoob.com/java/java-stringbuffer.html)。


--------


##### 字符串长度
{:.no_toc}

用于获取有关对象的信息的方法称为访问器方法。  
String类的一个访问器方法是length()方法，它返回字符串对象包含的字符数。

下面的代码执行后，len变量等于14:

```java
public class StringDemo {
	public static void main(String args[]) {
		String site = "www.runoob.com";
		int len = site.length();
		System.out.println("菜鸟教程网址长度 : " + len);
	}
}
```

以上实例编译运行结果如下：

    菜鸟教程网址长度 : 14


--------


##### 连接字符串
{:.no_toc}

String类提供了连接两个字符串的方法：

```java
string1.concat(string2);
```

返回string2连接string1的新字符串。也可以对字符串常量使用concat()方法，如：

```java
"My name is ".concat("Runoob");
```

更常用的是使用'+'操作符来连接字符串，如：

```java
"Hello," + " world" + "!"
```
结果如下:

    "Hello, world!"

下面是一个例子:

```java
public class StringDemo {
	public static void main(String args[]) {
		String string1 = "菜鸟教程网址：";
		System.out.println("1、" + string1 + "www.runoob.com");
	}
}
```

以上实例编译运行结果如下：

    1、菜鸟教程网址：www.runoob.com


--------


##### 创建格式化字符串
{:.no_toc}

我们知道输出格式化数字可以使用printf()和format()方法。String类使用静态方法format()返回一个String对象而不是PrintStream对象。

String类的静态方法format()能用来创建可复用的格式化字符串，而不仅仅是用于一次打印输出。如下所示：

```java
System.out.printf("浮点型变量的的值为 "+"%f, 整型变量的值为 "+"%d, 字符串变量的值为 "+"is %s",floatVar,intVar,stringVar);
```

你也可以这样写

```java
String fs;
fs = String.format("浮点型变量的的值为 " + "%f, 整型变量的值为 " + "%d, 字符串变量的值为 " + "is %s", floatVar, intVar, stringVar);
System.out.println(fs);
```


--------


##### String 方法

下面是String类支持的方法，更多详细，参看[ Java String API ](http://www.runoob.com/manual/jdk1.6/java/lang/String.html)文档:

|SN(序号)|	方法|描述|
|:---:|:---:|:---|
|1|	char charAt(int index)|返回指定索引处的 char 值。|
|2|	int compareTo(Object o)|把这个字符串和另一个对象比较。|
|3|	int compareTo(String anotherString)|按字典顺序比较两个字符串。|
|4|	int compareToIgnoreCase(String str)|按字典顺序比较两个字符串，不考虑大小写。|
|5|	String concat(String str)|将指定字符串连接到此字符串的结尾。|
|6|	boolean contentEquals(StringBuffer sb)|当且仅当字符串与指定的StringButter有相同顺序的字符时候返回真。|
|7|	static String copyValueOf(char[] data)|返回指定数组中表示该字符序列的 String。|
|8|	static String copyValueOf(char[] data, int offset, int count)|返回指定数组中表示该字符序列的 String。|
|9|	boolean endsWith(String suffix)|测试此字符串是否以指定的后缀结束。|
|10|	boolean equals(Object anObject)|将此字符串与指定的对象比较。|
|11|	boolean equalsIgnoreCase(String anotherString)|将此 String 与另一个 String 比较，不考虑大小写。|
|12|	byte[] getBytes()| 使用平台的默认字符集将此 String 编码为 byte 序列，并将结果存储到一个新的 byte 数组中。|
|13|	byte[] getBytes(String charsetName)|使用指定的字符集将此 String 编码为 byte 序列，并将结果存储到一个新的 byte 数组中。|
|14|	void getChars(int srcBegin, int srcEnd, char[] dst, int dstBegin)|将字符从此字符串复制到目标字符数组。|
|15|	int hashCode()|返回此字符串的哈希码。|
|16|	int indexOf(int ch)|返回指定字符在此字符串中第一次出现处的索引。|
|17|	int indexOf(int ch, int fromIndex)|返回在此字符串中第一次出现指定字符处的索引，从指定的索引开始搜索。|
|18|	int indexOf(String str)| 返回指定子字符串在此字符串中第一次出现处的索引。|
|19|	int indexOf(String str, int fromIndex)|返回指定子字符串在此字符串中第一次出现处的索引，从指定的索引开始。|
|20|	String intern()| 返回字符串对象的规范化表示形式。|
|21|	int lastIndexOf(int ch)| 返回指定字符在此字符串中最后一次出现处的索引。|
|22|	int lastIndexOf(int ch, int fromIndex)|返回指定字符在此字符串中最后一次出现处的索引，从指定的索引处开始进行反向搜索。|
|23|	int lastIndexOf(String str)|返回指定子字符串在此字符串中最右边出现处的索引。|
|24|	int lastIndexOf(String str, int fromIndex)| 返回指定子字符串在此字符串中最后一次出现处的索引，从指定的索引开始反向搜索。|
|25|	int length()|返回此字符串的长度。|
|26|	boolean matches(String regex)|告知此字符串是否匹配给定的正则表达式。|
|27|	boolean regionMatches(boolean ignoreCase, int toffset, String other, int ooffset, int len)|测试两个字符串区域是否相等。|
|28|	boolean regionMatches(int toffset, String other, int ooffset, int len)|测试两个字符串区域是否相等。|
|29|	String replace(char oldChar, char newChar)|返回一个新的字符串，它是通过用 newChar 替换此字符串中出现的所有 oldChar 得到的。|
|30|	String replaceAll(String regex, String replacement|使用给定的 replacement 替换此字符串所有匹配给定的正则表达式的子字符串。|
|31|	String replaceFirst(String regex, String replacement)| 使用给定的 replacement 替换此字符串匹配给定的正则表达式的第一个子字符串。|
|32|	String[] split(String regex)|根据给定正则表达式的匹配拆分此字符串。|
|33|	String[] split(String regex, int limit)|根据匹配给定的正则表达式来拆分此字符串。|
|34|	boolean startsWith(String prefix)|测试此字符串是否以指定的前缀开始。|
|35|	boolean startsWith(String prefix, int toffset)|测试此字符串从指定索引开始的子字符串是否以指定前缀开始。|
|36|	CharSequence subSequence(int beginIndex, int endIndex)| 返回一个新的字符序列，它是此序列的一个子序列。|
|37|	String substring(int beginIndex)|返回一个新的字符串，它是此字符串的一个子字符串。|
|38|	String substring(int beginIndex, int endIndex)|返回一个新字符串，它是此字符串的一个子字符串。|
|39|	char[] toCharArray()|将此字符串转换为一个新的字符数组。|
|40|	String toLowerCase()|使用默认语言环境的规则将此 String 中的所有字符都转换为小写。|
|41|	String toLowerCase(Locale locale)| 使用给定 Locale 的规则将此 String 中的所有字符都转换为小写。|
|42|	String toString()| 返回此对象本身（它已经是一个字符串！）。|
|43|	String toUpperCase()|使用默认语言环境的规则将此 String 中的所有字符都转换为大写。|
|44|	String toUpperCase(Locale locale)|使用给定 Locale 的规则将此 String 中的所有字符都转换为大写。|
|45|	String trim()|返回字符串的副本，忽略前导空白和尾部空白。|
|46|	static String valueOf(primitive data type x)|返回给定data type类型x参数的字符串表示形式。|


