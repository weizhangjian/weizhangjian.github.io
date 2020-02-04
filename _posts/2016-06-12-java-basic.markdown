---
layout:     post
title:      "Java基础"
subtitle:   " \"开始 Java 编程之旅\""
date:       2016-06-12 00:00:00
author:     "Mr.Wei"
header-img: "img/post-bg-about-java.jpg"
tags:
    - Java
---

# 前言

Java 语言的学习需要一个循序渐进的过程，作为初学者，当你具备一定的计算机基础后，那么来[《学习 Java 语言快速入门》](http://wiki.jikexueyuan.com/project/java/)是个不错选择。

可能此时你迫不及待的想要开始 Java 编程之旅，开始想象通过这门教程就能够掌握 Java 开发的所有，通过这门课或是这个系列的课程，你能成为 Java 大神！那么请你==，我问你三个问题：你了解各种开发语言吗？你对 Java 学习的重点、难点、学习路径了解吗？你打算长久的学习还是一时兴起？

谨记：

> 1. 任何一门编程语言的学习都不会立竿见影，而是一个长久的持续学习的过程；
> 2. 学习编程没有捷径，最有效的学习方法是多练习；
> 3. 天才请忽略前两点。

Java 是一种高级编程语言，可以在不同平台运行。本指南是对 Java 语言的基础概括，能够帮助初学者快速掌握其主要知识点。

# Java开发平台

“工欲善其事，必先利其器”，一款上手容易的开发工具会让你学习和工作事半功倍，很显然，在 Java 领域，开发平台 Eclipse 和 IntelliJ IDEA 各有特色，几乎是平分秋色，所以无论你选择哪一种，都是你走入 Java 开发领域的尖兵利器。

Eclipse 与 IntelliJ IDEA 谁好谁坏的问题已经争论了好久，中规中矩的说，每一种开发工具都是因需要而决定的，Eclipse 好上手，但是很多功能需要按转插件，IntelliJ IDEA 学习起来比较复杂，但是它的智能与方便也是值得称谓的，两个平台各有千秋，因人而异。

[《Eclipse 使用教程》](http://wiki.jikexueyuan.com/project/eclipse/)包含了所有 Eclipse 使用方法，不仅仅适合初学者，当然，这里推荐初学者重点学习创建项目的过程、代码调试、编译与运行程序，随着你对 Java 开发的理解，那么你也可以就插件、模板、快捷键等进行深入学习。

[《IntelliJ IDEA 使用教程》](http://wiki.jikexueyuan.com/project/intellij-idea-tutorial/)从 IntelliJ IDEA 的安装、卸载、软件设置、项目配置等各个方面进行讲解。通过本系列教程的学习，希望你能爱上 IntelliJ IDEA，爱上它的体贴。

# Java 中文乱码解决之道

很多初学者或是使用 Java 语言很久的开发者都容易忽视一个问题——乱码！每次出现乱码后，都会去百度或是 Google 查一下解决方案，但是究竟是什么原因造成的乱码，大部分却不关心，造成了很多人知其然不知其所以然，本文作者将通过[《Java 中文乱码解决之道》](http://wiki.jikexueyuan.com/project/java-chinese-garbled-solution/)彻底分析、解决 Java 中文乱码问题。

# Java 提高篇

当你学完 Java 的基础语法后，你可能会简单的了解到什么是面向对象，面向对象的三大特征，接口，异常、集合等概念，对他们有了初步的理解，但是，个中原理可能还不是非常清楚，本着学习要学到明白的原则，[《Java 提高篇》](http://wiki.jikexueyuan.com/project/java-enhancement/java-twentyone.html)将会是你提高 Java 认识的不错选择。

# 深入理解 Java 虚拟机

如果你想成为一个 Java 开发的高手，那就不止能够开发代码，改改 bug，做些页面的增删改查，你还需要了解 Java 背后的故事。JVM 是 Java Virtual Machine（Java 虚拟机）的缩写。Java 语言的一个非常重要的特点就是与平台的无关性。而使用 Java 虚拟机是实现这一特点的关键。想知道为什么 Java 能够在长期霸占 TIOBE 编程语言社区排行榜榜首的吗？那么你需要脱下 Java 的外衣，去看看他内部的真实构造，[深入理解 Java 虚拟机](http://wiki.jikexueyuan.com/project/java-vm/)。

对于 JVM 结构及参数的理解，可以查看[《JVM 实用参数系列》](http://wiki.jikexueyuan.com/project/jvm-parameter/)

# Java 并发性和多线程

提及多线程，我们就会想到进程、线程、中央处理器（CPU）。那么什么是进程呢？进程是程序执行的最小单位、线程是程序的执行流，CPU 则是处理执行流的中转站和翻译器。

那么并发呢？当有多个线程在操作时，如果系统只有一个 CPU，则它根本不可能真正同时进行一个以上的线程，它只能把 CPU 运行时间划分成若干个时间段,再将时间 段分配给各个线程执行，在一个时间段的线程代码运行时，其它线程处于挂起状。这种方式我们称之为并发(Concurrent)。

一个比较简洁的例子：如果进程是火车的车厢、那么火车就是线程，我们的火车站调度站就是 CPU。很久以前，我们只能让一辆火车进站出站后，下一辆火车才能进站，这样的效率很差，大部分时间都是火车排长队的等待，我们的调度资源处于极大的浪费；后来人们改进了方案，增加了很多条轨道，可以让多辆火车同时进站和出站，这样调度资源得到高效利用；没开心几天，问题发生了，突然有一天，发生了一场灾难，因为没有有效的管理，两量同时进站相向的火车并轨相撞了，为了避免这类并行问题的发生，人们加入优先级调度，让客车优先于货运车，加入快车、慢车，安排好时间管理，这样从根本上杜绝火车进站并轨的问题。

可能上面的描述还不能让你有个更好的理解，那么[《Java 并发性和多线程》](http://wiki.jikexueyuan.com/project/java-concurrent/)可以帮你深入理解。学习过操作系统的人可以直接学习 [《Java 并发编程》](http://wiki.jikexueyuan.com/project/java-concurrency/)。

# 深入理解 Java 内存模型

Java 线程之间的通信对程序员完全透明，内存可见性问题很容易困扰 Java 程序员。Java 程序运行在 JVM(Java Virtual Machine，Java 虚拟机)上，可以把 JVM 理解成 Java 程序和操作系统之间的桥梁，JVM 实现了 Java 的平台无关性，由此可见 JVM 的重要性。所以在[《深入理解 Java 内存模型》](http://wiki.jikexueyuan.com/project/java-memory-model/) 学习 Java 内存分配原理的时候一定要牢记这一切都是在 JVM 中进行的，JVM 是内存分配原理的基础与前提。

# Java 集合

<img width="490" src="/img/in-post/post-java-basic/java-collection.jpg"/>

上图是 Java 集合类的一个接口简图。

Java 集合其实是 Java 集合类的简写，集合类在 Java 中有很重要的意义。

为什么需要 Java 集合类呢？

数组是很常用的一种的数据结构，我们用它可以满足很多的功能，但是，有时我们会遇到如下这样的问题：

> * 我们需要该容器的长度是不确定的。
> * 我们需要它能自动排序。
> * 我们需要存储以键值对方式存在的数据。

如果遇到上述的情况，数组是很难满足需求的，接下来将介绍另一种与数组类似的数据结构——集合类，保存临时数据，管理对象，泛型，Web 框架等，很多都大量用到了集合类，可以详见 [《Java 集合学习指南》](http://wiki.jikexueyuan.com/project/java-collection/)。

# Java 反射机制

如果你认为 Java 的反射就是我们物理学上的反射，那么可能让你失望了，反射用在 Java 身上指的是我们可以于运行时加载、探知、使用编译期间完全未知的 classes。反射（Reflection）机制是 JAVA 成为动态语言的一个关键特性。从这个观点看，Perl，Python，Ruby 是动态语言，C++，C# 不是动态语言，Java 算是准动态语言。

那么 Java 反射机制都有哪些具体的应用：Java 逆向编译工具，也是我们 Java 开发常用的反编译工具；SSH 三大框架都不同程度上使用了反射机制；制作模板程序，查看类与类之间的关联等。

也就是说，它是一个非常重要的原理，更多信息可以详见[《Java 反射机制教程》](http://wiki.jikexueyuan.com/project/java-reflection/)。

# Java NIO 指南

> “对语言设计人员来说，创建好的输入／输出系统是一项特别困难的任务。”  ――《Think in Java》

前面我们在《Java 语言快速入门》已经了解 Java I/O 这个知识点，但是一门伟大的开发语言，怎么能有缺陷呢，IO 可以面向流，但是谁去面向缓冲区？[《Java NIO 指南》](http://wiki.jikexueyuan.com/project/java-nio/)给你答案。

Java NIO 和 IO 之间第一个最大的区别是，IO 是面向流的，NIO 是面向缓冲区的。 Java IO 面向流意味着每次从流中读一个或多个字节，直至读取所有字节，它们没有被缓存在任何地方。此外，它不能前后移动流中的数据。如果需要前后移动从流中读取的数据，需要先将它缓存到一个缓冲区。 Java NIO 的缓冲导向方法略有不同。数据读取到一个它稍后处理的缓冲区，需要时可在缓冲区中前后移动。这就增加了处理过程中的灵活性。但是，还需要检查是否该缓冲区中包含所有您需要处理的数据。而且，需确保当更多的数据读入缓冲区时，不要覆盖缓冲区里尚未处理的数据。
