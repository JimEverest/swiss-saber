# swiss-saber scripts




### 锐速 lotserver 一键包： (ubuntu一键更换内核 安装锐速 - 16.04 14.04可用)
>  https://www.jianshu.com/p/19ab389820ef

sudo -i

wget https://raw.githubusercontent.com/JimEverest/swiss-saber/master/ruisu.sh  && chmod +x ruisu.sh && bash ruisu.sh


============================================================
## SS:
sudo -i

wget -N --no-check-certificate https://raw.githubusercontent.com/JimEverest/swiss-saber/master/ss-go.sh && chmod +x ss-go.sh && bash ss-go.sh


or ? 
./shadowsocks-all.sh 2>&1 | tee shadowsocks-all.log


============================================================
## SSR:
#  https://ssr.tools/31

sudo -i

wget -N --no-check-certificate https://raw.githubusercontent.com/JimEverest/swiss-saber/master/shadowsocks-all.sh && chmod +x shadowsocks-all.sh && bash shadowsocks-all.sh



启动SSR：
/etc/init.d/shadowsocks-r start
退出SSR：
/etc/init.d/shadowsocks-r stop
重启SSR：
/etc/init.d/shadowsocks-r restart
SSR状态：
/etc/init.d/shadowsocks-r status
卸载SSR：
./shadowsocks-all.sh uninstall

另外如果需要更改SSR的相关配置参数，配置文件位置在：/etc/shadowsocks-r/config.json


============================================================
## V2ray:
> https://ssr.tools/269

sudo -i

wget -N --no-check-certificate https://raw.githubusercontent.com/JimEverest/swiss-saber/master/v2ray.sh && bash v2ray.sh

(如果不能运行web面板， 安装以下：)
pip install Flask-BasicAuth 

启动Web ：
v2ray
1
============================================================
## V2ray2 (233) :
>233版V2ray一键安装脚本 集成BBR/锐速/Shadowsocks/MTproto
> [https://ssr.tools/1026](https://ssr.tools/1026)

    sudo -i
    bash <(curl -s -L https://raw.githubusercontent.com/JimEverest/swiss-saber/master/v2ray2.sh)

*端口443， 协议默认tcp即可。  如果需要开启KCPKUN网络加速， 则选择mKCP开头的， 流量以UDP形式传输。*


管理界面
> `v2ray` 

V2Ray 配置文件路径：/etc/v2ray/config.json

安装bbr / 锐速
 `v2ray bbr`
 - 注意：BBR和锐速不建议同时安装，二选一即可。


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



