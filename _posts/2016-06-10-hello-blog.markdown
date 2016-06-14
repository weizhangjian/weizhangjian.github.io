---
layout:     post
title:      "Welcome to JustinWei's Blog"
subtitle:   " \"Hello World, Hello Blog\""
date:       2016-06-10 00:00:00
author:     "JustinWei"
header-img: "img/post-bg-hello-blog.jpg"
tags:
    - 生活
---

> “A good beginning is half the battle.”


## 前言

机缘巧合在G+上看到了Study Jams的[活动链接](http://www.studyjamscn.com/thread-6-1-2.html)，凭借对谷歌的信仰，毫不犹豫参与了进来，经过一个月的学习，成功完成了第一阶段的考核,成为一名名副其实的入门级安卓开发人员。

主办方稍息调整和准备，现在开始了[第二阶段](http://www.studyjamscn.com/thread-13279-1-1.html)的活动，其中第一个任务就是有一个自己的技术博客，这才有了这个Blog。

作为一个有逼格的程序猿，Blog这种那么有个性化的东西挂在大众博客程序上太没意思了，经过比较最后选择了[GitHub Pages](https://pages.github.com/) + [Jekyll](http://jekyllcn.com/)的建站方案。

---

## 正文

先说说为啥选这个方案：

> *  [**GitHub Pages**](https://pages.github.com) 深度集成了Jekyll，Jekyll是用ruby语言实现的一个静态网站生成器，用[Markdown](http://daringfireball.net/projects/markdown)（或 [Textile](http://redcloth.org/textile)）、[Liquid](https://github.com/Shopify/liquid/wiki) 和 HTML & CSS 构建可发布的静态网站，当然包括生成博客。
> *  [**Jekyll**](http://jekyllcn.com) 使用 Liquid [模板语言](http://jekyllcn.com/docs/templates)，支持所有标准的 Liquid 标签和过滤器。Jekyll 甚至增加了几个过滤器和标签，自定制网站方便使用。
> *  有GitHub Pages的域名和免费无限空间，如果需要自定义域名，也只需要简单改改 DNS 加个 CNAME 就可以。
> *  **Markdown** 带来高效、优雅的写作体验

---

接下来说说搭建这个博客的技术细节，搭建方法网上一大堆，但建议在官方文档中去找方法。

### 搭建步骤：

#### 1. [GitHub Pages](https://pages.github.com)上搭建博客仓库，按照网页的提示选择创建就可以。

这里要注意[User, Organization, and Project Pages](https://help.github.com/articles/user-organization-and-project-pages/)的区别，**User & Organization Pages** 是GitHub pages的特殊的仓库，必须要用账户名来命名仓库名:`username.github.io`。`master`主分支将被用来建立和发布您的GitHub pages网站。

#### 2. [在本地安装Jekyll并搭建博客](https://help.github.com/articles/using-jekyll-as-a-static-site-generator-with-github-pages/)

现在各个平台都支持安装，具体实现可以参照[Github文档](https://help.github.com/articles/setting-up-your-github-pages-site-locally-with-jekyll/#platform-windows)或[Jekyll文档](http://jekyllrb.com/docs/installation/).

这里需要注意的有在国内rubygem的源被墙了，换成[Ruby中国](http://gems.ruby-china.org/)的镜像就能解决，请确保只有gems.ruby-china.org，有多个源也会影响速度。

```
$ gem sources --add http://gems.ruby-china.org/ --remove https://rubygems.org/
$ gem sources -l
*** CURRENT SOURCES ***

http://gems.ruby-china.org
```

#### 3. 选择有个性的主题，并修改模板，配置Jekyll

官网的主题有很多，[点开链接](http://jekyllthemes.org/)随你选择。

我选了Hux更改[Clean Blog](https://github.com/BlackrockDigital/startbootstrap-clean-blog-jekyll)主题后的改进版，带标签支持。 然后编辑_config.yml，更改相应参数。

我在这里推荐两个主题，个人觉的很不错：

> * 主页：[HyG →](http://gaohaoyang.github.io/) 项目地址：[gaohaoyang](https://github.com/Gaohaoyang/gaohaoyang.github.io)
> * 主页：[Hux →](http://huangxuan.me/) 项目地址：[huxpro](https://github.com/Huxpro/huxpro.github.io)   

#### 4. 用Markdown编写post

在线编辑器推荐使用[cmd markdown](https://www.zybuluo.com/cmd)进行编辑。

本地客户端推荐使用[Atom](https://atom.io/)进行编辑。

这一阶段是最耗时的阶段，但也算是进入写博文的正轨了，现在你看到的这篇就是用Atom编辑器编写的。

#### 5. 同步到GitHub仓库

可以用GitHub的客户端，也可以用git命令。

GitHub的windows客户端完全傻瓜化操作，git命令也不麻烦

```
$ git add .
$ git commit -m "Blog"
$ git remote add origin https://github.com/username/username.github.com.git
$ git push origin master
```

---

## 后记

回顾这个博客的诞生，一方面是完成StudyJams第二阶段的首次任务，更主要的是自己的兴趣，喜欢折腾这些东西！

如果你恰好逛到了这里，希望这篇博文能帮到你！
