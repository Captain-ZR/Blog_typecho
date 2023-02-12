var botui = new BotUI("botui");
botui.message.bot({
    delay: 200,
    content: "hi，欢迎来到这里😄"
}).then(function() {
    return botui.message.bot({
        delay: 1000,
        content: "我是可爱的聊天机器人🤖"
    })
}).then(function() {
    return botui.message.bot({
        delay: 1000,
        content: "我将为你介绍恋爱清单"
    })
}).then(function() {
    return botui.action.button({
        delay: 1500,
        action: [{
            text: "那么开始把",
            value: "nmksb"
        },
        {
            text: "不感兴趣",
            value: "bgxq"
        }]
    })
}).then(function(res) {
    if (res.value == "nmksb") {
        nmksb()
    }
    if (res.value == "bgxq") {
        bgxq()
    }
});
//那么开始吧
var nmksb = function() {
    botui.message.bot({
        delay: 1500,
        content: "想要了解什么呢？🤔"
    }).then(function() {
        return botui.message.bot({
            delay: 1500,
            content: "是关于小站？"
        })
    }).then(function() {
        return botui.message.bot({
            delay: 1500,
            content: "还是关于这对情侣呢？"
        })
    }).then(function() {
        return botui.action.button({
            delay: 1500,
            action: [{
                text: "关于小站",
                value: "gyxz"
            },
            {
                text: "关于这对情侣",
                value: "gyzdql"
            }]
        })
    }).then(function(res) {
        if (res.value == "gyxz") {
            gyxz()
        }
        if (res.value == "gyzdql") {
            gyzdql()
        }
    });
    var gyxz = function() {
        botui.message.bot({
            delay: 1500,
            content: "本站恋爱清单是庄先生送给周女士的礼物🎁"
        }).then(function() {
            return botui.message.bot({
                delay: 1500,
                content: "希望两人能在这虚拟的网络世界有一块自留地"
            })
        }).then(function() {
            return botui.message.bot({
                delay: 1500,
                content: "记录他们的生活点滴🍵"
            })
        }).then(function() {
            return botui.action.button({
                delay: 1500,
                action: [{
                    text: "这个恋爱清单有什么功能呢",
                    value: "gn"
                }]
            })
        }).then(function(res) {
            if (res.value == "gn") {
                gn()
            }
        });
        var gn = function() {
            botui.message.bot({
                delay: 1500,
                content: "本站有几大模块"
            }).then(function() {
                return botui.message.bot({
                    delay: 1500,
                    content: "关于：引用机器人介绍"
                })
            }).then(function() {
                return botui.message.bot({
                    delay: 1500,
                    content: "点点滴滴：两人记录生活的地方"
                })
            }).then(function() {
                return botui.message.bot({
                    delay: 1500,
                    content: "时光机：发表说说短文字"
                })
            }).then(function() {
                return botui.message.bot({
                    delay: 1500,
                    content: "相册🖼：存放照片与记忆"
                })
            }).then(function() {
                return botui.message.bot({
                    delay: 1500,
                    content: "恋爱笔记：两人想完成的❤️恋爱❤️清单📝"
                })
            }).then(function() {
                return botui.message.bot({
                    delay: 1500,
                    content: "祝福板：访客留言区🗒︎"
                })
            }).then(function() {
                return botui.message.bot({
                    delay: 1500,
                    content: "都介绍完了，还不赶紧去小站的其他地方转转，顺手在祝福板留着评论的足迹吧"
                })
            })
        }
        // gn结尾
    } 
    // gyxz结尾
    var gyzdql = function() {
        botui.message.bot({
            delay: 1500,
            content: "男主叫庄先生"
        }).then(function() {
            return botui.message.bot({
                delay: 1500,
                content: "女主叫周女士"
            })
        }).then(function() {
            return botui.action.button({
                delay: 1500,
                action: [{
                    text: "庄先生和周女士是怎么认识的？",
                    value: "zmrs"
                }]
            })
        }).then(function(res) {
            if (res.value == "zmrs") {
                zmrs()
            }
        });
        var zmrs = function() {
            botui.message.bot({
                delay: 1500,
                content: "两人相恋于2018年"
            }).then(function() {
                return botui.message.bot({
                    delay: 1500,
                    content: "通过巧妙的缘分再次相遇，"
                })
            }).then(function() {
                return botui.message.bot({
                    delay: 1500,
                    content: "开始就是问候平时琐事"
                })
            }).then(function() {
                return botui.message.bot({
                    delay: 1500,
                    content: "慢慢的发展我俩就产生了那种好感"
                })
            }).then(function() {
                return botui.message.bot({
                    delay: 1500,
                    content: "后来庄先生就向周女士表白了"
                })
            }).then(function() {
                return botui.message.bot({
                    delay: 1500,
                    content: "然后就搭建了这个恋爱清单"
                })
            })
        }
        //zmrs

    }
  // gyzdql结尾
    
    
    /*结尾 */
}


//结束
  var bgxq = function() {
    botui.message.bot({
        delay: 1500,
        content: "感谢访问小站"
    })
}