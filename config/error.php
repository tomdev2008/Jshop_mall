<?php
/**
 * 11000 用户
 * 12000 商品
 * 13000 订单
 * 14000 api
 * 15000 促销&优惠券
 *
 */
return [
    '10000' => '未定义的错误信息',
    '10002' => '没有找到此记录',
    '10003' => '参数不正确',
    '10004' => '保存失败',
    '10005' => '用户信息没有修改',
    '10006' => '图片超过限定张数',
    '10007' => '删除失败',
    '10008' => '没有此配置参数',
    '10009' => '没有此消息编码，请确认',
    '10010' => '您没有该操作权限',
    '10011' => '请选择商户',
    '10012' => '验证码错误',
    '10013' => '请输入验证码',
    '10014' => '没有此推荐人',
    '10015' => '商户公众号未配置',



    '10050' => '此支付方式未启用',
    '10051' => '缺少参数，请确认',
    '10052' => '此支付方式未启用，或不是一个有效的支付方式',
    '10053' => '已开启过此支付方式，不需要重复开启',
    '10054' => '没有此支付类型,请确认',
    '10055' => '请选择支付方式',
    '10056' => '请输入支付单号',
    '10057' => '没有此支付方式',
    '10058' => '没有此支付方式，或此支付方式未启用',
    '10059' => '支付单金额为0，直接支付成功',
    '10060' => '没有找到此支付单',
    '10061' => '不需要获取openid',
    '10062' => '请用户先进行微信登陆或绑定',
    '10063' => '请用户先进行支付宝登陆或绑定',
    '10064' => '',
    '10065' => '',
    '10066' => 'msg里的值就是跳转的url',                  //微信公众号静默登陆
    '10067' => '公众号支付必须传url参数',
    '10068' => 'code必传',


    '10100' => '没有此消息编码',



    '11001'   => '用户未登录',
    '11002'   => '此微信用户未登录或当前账号未绑定微信账号',
    '11003' => '请选择头像',
    '11004' => '没有找到此用户',
    '11005' => '此用户没有绑定手机号码，所以发送短信失败',
    '11006' => '此用户以停用，请联系总管理员',
    '11007' => '余额不足',
    '11008' => '请输入用户名',
    '11009' => '请输入密码，长度为6-16位',
    '11010' => '没有找到此管理员',
    '11011' => '用户名重复',
    '11012' => '请输入旧密码',
    '11013' => '请输入新密码',
    '11014' => '请输入确认密码',
    '11015' => '用户余额不足',
    '11016' => '没有找到此提现银行卡',
    '11017' => '请输入银行卡号',
    '11018' => '请输入提现金额',
    '11019' => '已注册过，请直接登陆',
    '11020' => '请输入正确的充值金额',
    '11021' => '请检查银行卡号是否有误',
    '11022' => '账号已停用',
    '11023' => '超级管理员，就不要编辑了吧？',
    '11024' => '超级管理员，就不要删除了把？',

    '11050' => '没有此收货地址信息',
    '11051' => '请输入手机号码',
    '11055' => '请选择自提门店',



    '11070' => '请输入角色名称',
    '11071' => '没有此角色信息',

    '11080' => '请输入管理员的手机号码',
    '11081' => '没有找到此用户',
    '11082' => '目前一个账号只能绑定一个店铺，此手机号码已注册过店铺，如果是未审核通过的店铺可以联系平台删除对应的店铺，然后再次添加此管理员',
    '11083' => '手机号码和用户id两者最少写一个',
    '11084' => '此账号已经是店铺管理员了，请勿重新设置',
    '11085' => '此账号是超级管理员，不需要添加',
    '11086' => '您不是管理员，请先成为商户管理员或者创建自己的店铺',
    '11087' => '用户绑定了多个商户平台，系统不知道你想登陆哪一个，需要用户去选择',      //严格意义上来说这个不是错误信息
    '11088' => '没有找到控制器，请联系平台管理员',
    '11089' => '没有找到此方法，请联系平台管理员',
    '11090' => '没有找到此方法所对应的关联方法，请联系平台管理员',
    '11091' => '请先清空下级节点',
    '11092' => '核心参数不能为空',
    '11093' => '父节点是模块，当前类型就必须是控制器',
    '11094' => '父节点是控制器，当前类型就必须是方法',
    '11095' => '父节点是根节点，当前类型就必须是模块',
    '11096' => '当前节点已经存在，请勿重复提交',
    '11097' => '设置的父节点可能会陷入死循环',
    '11098' => '设置的父菜单可能陷入死循环',
    '11099' => '如果是控制器节点，菜单节点必须和父节点保持一致',



    '11100'  => '购物车商品不能为空，或不是有效的商品',


    '11500' => '店铺不存在，请确认',
    '11501' => '店铺现在处于非正常状态',       //未审核通过或者是到期了




    '13001' => '请选择收货地址',
    '13100' => '请输入订单编号',
    '13101' => '没有找到此订单信息,或者您没有权限查看此信息',
    '13102' => '已有售后,请联系客服',

    '13200' => '订单不是可售后状态',
    '13201' => '退货的数量超过可退的数量',
    '13202' => '退货商品不正确，请确认',
    '13203' => '订单状态不可退款',
    '13204' => '订单状态不可退货',
    '13205' => '请选择退货商品',
    '13206' => '总退款金额超过已支付金额',
    '13207' => '售后单不是待审核状态，或者没有找到此售后单',
    '13208' => '退款单金额为0，不需要退款',
    '13209' => '退货数量为空，不需要生成退货单',
    '13210' => '退款单已退或没权限进行操作',
    '13211' => '退货单已退或没权限进行操作',
    '13212' => '请输入退货单编号',
    '13213' => '请选择物流公司',
    '13214' => '请输入物流编码',
    '13215' => '请输入退款单号',
    '13216' => '请输入退款金额',
    '13217' => '请输入售后单号',
    '13218' => '没有找到此售后单',
    '13219' => '没有找到此退款单或此退款单状态不是未待退款状态',
    '13220' => '请输入退货单号',
    '13221' => '没有找到此退货单',
    '13222' => '请输入售后单号',
    '13223' => '没有找到此售后单号',
    '13224' => '没有找到此退款单或此退款单状态不是退款失败状态',
    '13225' => '缺少物流查询参数',
    '13226' => 'x轴最多1000个节点，请减少时间范围，或者修改粒度',




    '13300' => '订单已完成或取消不能发货',
    '13301' => '订单未付款不能发货',
    '13302' => '订单已发货不能再发货',
    '13303' => '订单中不存在要发货的商品',
    '13304' => '发货数量大于订单中商品的数量',
    '13305' => '发货单生成出现未知错误',
    '13306' => '发货失败，该货品已不存在',
    '13307' => '发货失败，商品数量不足',






    '13400' => '评价缺少商品信息',
    '13401' => '评价缺少订单号',
    '13402' => '评价缺少商家店铺评价信息',
    '13403' => '缺少商品ID参数',




    '14001' => '',
    '14002' => 'method参数结构错误',
    '14003' => 'method参数1不存在',
    '14004' => 'method参数2不存在',
    '14006' => '请先登录',
    '14007' => '用户身份过期请重新登录',
    '14008' => '操作失败，请重试1',
    '14009' => '操作失败，请重试2',
    '14011' => '',


    //促销，优惠券
    '15001' => '请输入促销名称',
    '15002' => '请输入起止时间',
    '15003' => '请选择促销条件',
    '15004' => '没有找到此促销条件',
    '15005' => '没有找到此促销结果',
    '15006' => '请输入促销ID参数',
    '15007' => '该优惠券不存在或状态不可领取',
    '15008' => '你已领取过了,勿重复领取',
    '15009' => '优惠券号码不存在',
    '15010' => '优惠券还没有到开始时间',
    '15011' => '优惠券已经过期',
    '15012' => '优惠券禁用了，请联系客服',
    '15013' => '优惠券已经使用过了',
    '15014' => '优惠券不符合使用规则',
    '15015' => '同一类优惠券，只能使用一张',
    '15016' => '团购或秒杀只能应用一种促销类型',
    '15017' => '同一个商品只能同时存在一个团购秒杀',

    //拼团
    '15601' => '还没有到时间',
    '15602' => '已经结束了',
    '15603' => '没有找到此拼团商品',
    '15604' => '请传拼团id',
    '15605' => '请传商品id',
    '15606' => '请传入订单id或者team_id',
    '15607' => '没有此拼团记录,或不是已经结束',
    '15608' => '参加拼团的商品和下单商品不一致',
    '15609' => '没有找到拼团发起人',

    //微信消息
    '16001'=>'请输入标题',
    '16002'=>'请先填写内容',

];
