---
layout: post
title: "mc服务器常用指令"
date:   2025-4-19
tags: [mc]
comments: true
author: Damiam2012
---

###### 说明：mc常用指令

<!-- more -->

服务器常用指令（后台输入不加/，游戏内输入加/）  

/op [玩家名称] 给某个玩家[OP](https://zhida.zhihu.com/search?content_id=209751157&content_type=Article&match_order=1&q=OP&zd_token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJ6aGlkYV9zZXJ2ZXIiLCJleHAiOjE3NDUyMDgyNTUsInEiOiJPUCIsInpoaWRhX3NvdXJjZSI6ImVudGl0eSIsImNvbnRlbnRfaWQiOjIwOTc1MTE1NywiY29udGVudF90eXBlIjoiQXJ0aWNsZSIsIm1hdGNoX29yZGVyIjoxLCJ6ZF90b2tlbiI6bnVsbH0.AeMAqnGqIlB0vKSMrwSHI6tDA3YNf5awpM0N_6hkjhI&zhida_source=entity)  

/deop [玩家名称] 取消某个玩家的OP  

/gamemode [0/1/2] 给自己生存模式/创造模式/冒险模式  

/gm [0/1/2] [玩家名称] 给别人生存模式/创造模式/冒险模式  

/whitelist add [玩家名称] 给某个玩家[白名单](https://zhida.zhihu.com/search?content_id=209751157&content_type=Article&match_order=1&q=%E7%99%BD%E5%90%8D%E5%8D%95&zd_token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJ6aGlkYV9zZXJ2ZXIiLCJleHAiOjE3NDUyMDgyNTUsInEiOiLnmb3lkI3ljZUiLCJ6aGlkYV9zb3VyY2UiOiJlbnRpdHkiLCJjb250ZW50X2lkIjoyMDk3NTExNTcsImNvbnRlbnRfdHlwZSI6IkFydGljbGUiLCJtYXRjaF9vcmRlciI6MSwiemRfdG9rZW4iOm51bGx9.-sGdRhueo37wWwAW3qZmxahfQ88frd5K2kXfwzT1J9c&zhida_source=entity)  

/whitelist remove [玩家名称] 取消某个玩家的白名单  

/ban [玩家名称] 封禁某个玩家  

/ban [IP] 封禁某个IP地址  

/tempban [玩家名称/IP] [时间] 封禁某个玩家或IP一段时间 [时间]：s=秒，m=分钟，h=小时，d=天,w=星期，mo=月，y=年  

比如，封禁A玩家2个星期，可以输入/tempban A 2w  

/mute [玩家名称] [时间] 禁言某个玩家一段时间  

/unban [玩家名称/IP] 解封某个玩家或者IP  

/setworth [物品名称/物品ID] [数量] 设置一个东西的价格  

/worth [玩家名称] 查看价格，不写物品ID默认查看手上的物品价格  

/itemdb 查询手上所拿物品的名称和ID  

/mail [read/clear/send] [玩家名称] [语句] 读取/清除/发送某个离线玩家的留言  

/msg [语句] 私聊  

/near 查看附近的玩家  

/reply [语句] 回复最后一个私聊你的玩家  

/whois [nickname/玩家名称] 查看某个玩家的用户信息，ID，akf信息，nickname  

/seen 查看玩家最后一次下线时所在的坐标  

/sudo [玩家名称] [指令] 让某个玩家执行一段命令  

比如/sudo A /suicide 会让A玩家自杀  

/tp [玩家名称] 强制飞到某个玩家的身边  

/tphere [玩家名称] 强制某个玩家飞到你身边  

/tpall [玩家名称] 强制所有玩家飞到你身边  

/tppos [x] [y] [z] 传送到坐标 x,y,z  

/spawner [怪物的英文名] 改变[刷怪笼](https://zhida.zhihu.com/search?content_id=209751157&content_type=Article&match_order=1&q=%E5%88%B7%E6%80%AA%E7%AC%BC&zd_token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJ6aGlkYV9zZXJ2ZXIiLCJleHAiOjE3NDUyMDgyNTUsInEiOiLliLfmgKrnrLwiLCJ6aGlkYV9zb3VyY2UiOiJlbnRpdHkiLCJjb250ZW50X2lkIjoyMDk3NTExNTcsImNvbnRlbnRfdHlwZSI6IkFydGljbGUiLCJtYXRjaF9vcmRlciI6MSwiemRfdG9rZW4iOm51bGx9.ULlJcRX4gOWS56QvVpsF04NGIwm-gxCn0zGWJq--lnw&zhida_source=entity)的刷新物  

/money give * [钱数] 给全部人钱  

*代表全部人，同样的 /give * [物品名称/物品ID] 也有效  

/tppos [x] [y] [z] 传送到某个坐标  

/say [语句] 让服务器发一段所有人可见、紫色字体的话  

/ping 测试你的服务器的延迟  

/gc 查看服务器信息  

/rules [页数] 查看服务器第几页的规则  

/essentials [reload/debug] 显示插件版本或者重新载入插件配置  

/backup 备份服务器，需要配置备份脚本  

/setspawn 在你站着的这个地方设置[重生点](https://zhida.zhihu.com/search?content_id=209751157&content_type=Article&match_order=1&q=%E9%87%8D%E7%94%9F%E7%82%B9&zd_token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJ6aGlkYV9zZXJ2ZXIiLCJleHAiOjE3NDUyMDgyNTUsInEiOiLph43nlJ_ngrkiLCJ6aGlkYV9zb3VyY2UiOiJlbnRpdHkiLCJjb250ZW50X2lkIjoyMDk3NTExNTcsImNvbnRlbnRfdHlwZSI6IkFydGljbGUiLCJtYXRjaF9vcmRlciI6MSwiemRfdG9rZW4iOm51bGx9.f113fJO4f4MAXL9YLirWZuSmP9foaI6DnYzxArc9QLQ&zhida_source=entity)  

/setwarp [地名] 标注一块地区，以后你可以用/warp [地名] 来飞到这个你标注过的地方，相当于tp到领地  

/baltop 查看[财富排行榜](https://zhida.zhihu.com/search?content_id=209751157&content_type=Article&match_order=1&q=%E8%B4%A2%E5%AF%8C%E6%8E%92%E8%A1%8C%E6%A6%9C&zd_token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJ6aGlkYV9zZXJ2ZXIiLCJleHAiOjE3NDUyMDgyNTUsInEiOiLotKLlr4zmjpLooYzmppwiLCJ6aGlkYV9zb3VyY2UiOiJlbnRpdHkiLCJjb250ZW50X2lkIjoyMDk3NTExNTcsImNvbnRlbnRfdHlwZSI6IkFydGljbGUiLCJtYXRjaF9vcmRlciI6MSwiemRfdG9rZW4iOm51bGx9.yDWOb7kAiR6VxvramIxfrM7aHqr5kIP3pzlvjAbSMWs&zhida_source=entity)  

/compass 显示你当前的方位  

/depth [玩家名称] 显示你当前的高度  

/getpos [玩家名称] 显示该玩家当前的坐标  

/help [数量] 查看第几页的帮助  

/helpop [语句] 留言求助OP  

/world 切换世界为 nether/normal/END 等  

/remove drops 99999 清空掉落物品  

/killall mobs 杀光怪物  

/vanish 隐身  

/fireball 从OP的嘴里吐出地狱轰炸机的火球  

/shock [玩家名称] 雷击某个玩家，如果直接/shock就在你的鼠标准星对着的地方雷击  

/nuke [玩家名称] 在某个玩家上方放核弹，其实就是一堆被激活的TNT从天上飞下来  

/Antioch 在鼠标准星所指的地方放一颗炸弹  

/butcher 杀死附近的全部怪物  

/killall 杀死附近的全部生物，包括玩家  

/kill [玩家名称] 杀死某个玩家  

/suicide 自杀  

/burn [玩家名称] 让某个玩家起火  

/ext [玩家名称] 给某个玩家灭火  

/jump 直接跳跃到鼠标准星所指地方  

/fly [玩家名称] 给某个玩家飞行的权限  

/up [高度数字] 把自己提升到某个高度，最大256脚下会生成一块玻璃垫着你  

/weather [storm/sun] 改变天气为雷雨天/晴天  

/rain off 停雨  

/time set [xx:xx] 设置时间 如/time set 06:00 就是设置时间为早上6点  

/eco [give/take/reset] [玩家名称] [数量] 给/拿走/修改某个玩家的钱  

/heal [玩家名称] 回复某个玩家的生命值  

/ptime [reset/list/day/night/dawn/xxxx/5am/xxxxticks] [玩家名称/] 单独更改一个玩家的时间， 指所有玩家 在时间前加上@，比如@day，这个玩家看到的世界就永远是白天  

/unlimited [list/item/clear] [玩家名称] 查看/给/清除某个玩家的无限物品  

/nick [称号] 给自己换称号  

/powertool [语句] 手拿一个马鞍，然后输入/powertool jump 以后你拿着马鞍左键一下就会直接使用这个命令/jump 你想快速说话，/powertool 你好 只要左键一下就能马上说出你好  

/powertooltoggle 清除所有的powertoll  

/forestgen 在自己身旁形成森林  

/pumpkins 在自己身旁形成南瓜林  

/snow 在自己的身旁成为雪后的样子  

/thaw 融化冰雪  

/tree [树的形状] big 大树 ewquoia 红木 Tall sequoia 高大的红木 Birch 衫树 Random 随机  

/enchant [[附魔属性](https://zhida.zhihu.com/search?content_id=209751157&content_type=Article&match_order=1&q=%E9%99%84%E9%AD%94%E5%B1%9E%E6%80%A7&zd_token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJ6aGlkYV9zZXJ2ZXIiLCJleHAiOjE3NDUyMDgyNTUsInEiOiLpmYTprZTlsZ7mgKciLCJ6aGlkYV9zb3VyY2UiOiJlbnRpdHkiLCJjb250ZW50X2lkIjoyMDk3NTExNTcsImNvbnRlbnRfdHlwZSI6IkFydGljbGUiLCJtYXRjaF9vcmRlciI6MSwiemRfdG9rZW4iOm51bGx9.5cyq-vJqxzaccrU3s9cpuMAC9P9UXm61GcQ_mA2tgGk&zhida_source=entity)] [等级] 用这个命令能给你手里的工具增加一个附魔属性 如果不写附魔名称则会列出附魔列表  

/setjail [监狱名称] 设置一个监狱  

/togglejail [玩家名称] 把该玩家送进小黑屋，永久关押  

/tjail [玩家名称] [监狱名称] [时间] 玩家扔到指定的小黑屋多少时间 1d，1h，1w 等  

/unjail [玩家名称] [监狱名称] [时间] 多久后把玩家释放出来  

/deljail [玩家名称] 从小黑屋释放出某玩家  

/invsee 查看并可以操作某个玩家的背包  

/clearinventory [玩家名称] 清空某个玩家的背包  



服务器权限组指令（后台输入不加/，游戏内输入加/）  

manuadd 123 XXX将玩家123添加到XXX用户组;  

manudel 123将玩家123变为默认组;  

manuaddsub 123 XXX将XXX用户组添加到玩家123的子用户组列表中;  

manudelsub 123 XXX将XXX用户组从玩家123的子列表中剔除;  

manuaddp 123 essentials.*为玩家123单独增加essentials.*权限(由于大部分权限都由Essentials基础插件提供，所以这是一般形式);  

manudelp 123 essentials.*删除玩家123拥有的essentials.*权限;  

manulistp 123列出玩家123所拥有的权限;  

manucheckp 123 essentials.*检查玩家123是否拥有essentials.*权限，并寻找出处(用户组);  

manuaddv 123 prefix&1设置玩家123的prefix变量为&1(变量目前有prefix(前缀)、suffix(尾缀)、build(破坏方块)三种，已有效);  

manudelv 123 prefix删除玩家123的prefix变量;  

manulistv 123列出玩家123所拥有的变量(虽然无效，但看还是能看的);  

manucheckv 123 prefix查看玩家123的prefix变量属性(这里看的是用户组里的);  

mangadd XXX添加名为XXX的用户组;  

mangdel XXX删除名为XXX的用户组;  

mangaddp XXX essentials.*为用户组XXX增加essentials.*权限;  

mangdelp XXX essentials.*删除用户组XXX拥有的essentials.*权限;  

manglistp XXX列出用户组XXX所拥有的权限;  

mangcheckp XXX essentials.*检查用户组XXX是否拥有essentials.*权限，并寻找出处;  

mangaddv XXX prefix&1设置用户组XXX的prefix变量为&1;  

mangdelv XXX prefix删除用户组XXX的prefix变量;  

manglistv XXX列出用户组XXX所拥有的变量;  

mangcheckv XXX prefix查看用户组XXX的prefix变量属性;  

mangaddi XXX1 XXX2使用户组XXX1继承用户组XXX2的权限;  

mangdeli XXX1 XXX2将用户组XXX2从用户组XXX1的继承列表中删除(这个命令经测试发现有问题，删除不了);  

manpromote 123 XXX将玩家123升级到XXX用户组;  

mandemote 123 XXX将玩家123降级到XXX用户组  

listgroups列出目前所存在的用户组。
