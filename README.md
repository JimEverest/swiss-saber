# swiss-saber scripts



============================================================
## 锐速 lotserver 一键包： (ubuntu一键更换内核 安装锐速 - 16.04 14.04可用)
#### https://www.jianshu.com/p/19ab389820ef
sudo -i

wget https://raw.githubusercontent.com/JimEverest/swiss-saber/master/ruisu.sh  && chmod +x ruisu.sh && bash ruisu.sh


============================================================
## SS:
sudo -i

wget -N --no-check-certificate https://raw.githubusercontent.com/JimEverest/swiss-saber/master/ss-go.sh && chmod +x ss-go.sh && bash ss-go.sh


============================================================
## MT_PROTO_PROXY:
#### https://doubibackup.com/es5fj9se.html

sudo -i

wget -N --no-check-certificate https://raw.githubusercontent.com/JimEverest/swiss-saber/master/mtproxy_go.sh && chmod +x mtproxy_go.sh && bash mtproxy_go.sh



============================================================
## 玩客云脚本:
#### https://post.smzdm.com/p/a6ln50gz/

// 玩客云挂个硬盘用自己的下载功能，然后开共享。群晖在文件夹管理里装载玩客云的共享地址，把挂载过来的资源又同步到群晖的另一个文件也可以不同步直接使用，这样等于玩客云下载群晖直接使用
//脚本上传到文件夹下加入到任务计划里.   开启机器的SSH，自己写的脚步，在任务计划管理里，定时每天执行
============= BY the way: ============


https://raw.githubusercontent.com/Homebrew/install/master/install
becomes
https://github.com/Homebrew/install/blob/master/install