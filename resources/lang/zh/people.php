<?php

return [

    //index
    'people_list_number_kids' => ':count 个孩子',
    'people_list_last_updated' => '上次咨询:',
    'people_list_number_reminders' => ':count 提醒',
    'people_list_blank_title' => '您还没有任何联系人',
    'people_list_blank_cta' => '添加某人',
    'people_list_sort' => '排序',
    'people_list_stats' => ':count 个联系人',
    'people_list_firstnameAZ' => '以名字A → Z排序',
    'people_list_firstnameZA' => '以名字 Z → A排序',
    'people_list_lastnameAZ' => '以姓A → Z排序',
    'people_list_lastnameZA' => '以姓Z → A排序',
    'people_list_lastactivitydateNewtoOld' => '以最后活动日期从近到远排序',
    'people_list_lastactivitydateOldtoNew' => '以最后活动日期从远到近排序',
    'people_list_filter_tag' => '拥有以下标签的联系人：',
    'people_list_clear_filter' => '清除筛选',
    'people_list_contacts_per_tags' => ':count 个联系人',
    'people_search' => '搜索联系人...',
    'people_search_no_results' => '未找到相关联系人:(',
    'people_list_account_usage' => '您的账户已联系人使用情况是：:current/:limit ',
    'people_list_account_upgrade_title' => '升级您的帐户, 以打开全部功能。',
    'people_list_account_upgrade_cta' => '现在更新',
    'people_list_untagged' => '查看未加标签的联系人',
    'people_list_filter_untag' => '所有未加标签的联系人',

    // people add
    'people_add_title' => '添加新人员',
    'people_add_missing' => '没有联系人，现在添加一个',
    'people_add_firstname' => '名',
    'people_add_middlename' => '中间名 (可选)',
    'people_add_lastname' => '姓（可选）',
    'people_add_nickname' => '昵称（可选）',
    'people_add_cta' => '添加',
    'people_save_and_add_another_cta' => '提交并添加其他人',
    'people_add_success' => ':name 已成功创建',
    'people_add_gender' => '性别',
    'people_delete_success' => '联系人已被删除',
    'people_delete_message' => '如果需要删除此联系人,',
    'people_delete_click_here' => '点击这里',
    'people_delete_confirmation' => '确实要删除此联系人吗？删除是永久性的。',
    'people_add_birthday_reminder' => '祝: name生日快乐',
    'people_add_import' => '是否要 <a href=":url">导入您的联系人</a>？',
    'people_edit_email_error' => '您的帐户中已经有一个联系人使用此邮件地址，请填写一个其他的。',
    'people_export' => '导出为 vCard',
    'people_add_reminder_for_birthday' => '创建一个年度生日提醒事项',

    // show
    'section_contact_information' => '联系人信息',
    'section_personal_activities' => '活动',
    'section_personal_reminders' => '提醒',
    'section_personal_tasks' => '任务',
    'section_personal_gifts' => '礼物',
    'section_personal_notes' => '便签',

    //
    'link_to_list' => '人名单',

    // Header
    'edit_contact_information' => '编辑联系人信息',
    'call_button' => '记录通话',

    // Stay in touch
    'stay_in_touch' => '常联系*',
    'stay_in_touch_frequency' => '常联系*提醒频率：每天|常联系*提醒频率：每 {count} 天',
    'stay_in_touch_invalid' => '频率必须大于0。',
    'stay_in_touch_premium' => '您需要升级到高级账户来使用这个功能！',
    'stay_in_touch_modal_title' => '常联系*',
    'stay_in_touch_modal_desc' => '我们将会用邮件提醒您与{firstname}保持联系。',
    'stay_in_touch_modal_label' => '每几天发送一封提醒邮件...？',

    // Calls
    'modal_call_title' => '记录通话',
    'modal_call_comment' => '你们说了什么？（可选）',
    'modal_call_date' => '通话是今天早些时候发生的。',
    'modal_call_change' => '更改',
    'modal_call_exact_date' => '电话记录发生在',
    'calls_add_success' => '已保存通话记录。',
    'call_delete_confirmation' => '你确定要删除此通话记录吗?',
    'call_delete_success' => '成功删除通话记录！',
    'call_title' => '通话记录',
    'call_empty_comment' => '无详细信息',
    'call_blank_title' => '记录您与:name的通话记录',
    'call_blank_desc' => '你打给:name',

    // age - birthday
    'birthdate_not_set' => '未设置生日',
    'age_approximate_in_years' => '大概:age岁',
    'age_exact_in_years' => ':age岁',
    'age_exact_birthdate' => '出生:date',

    // Last called
    'last_called' => '最近通话: :date',
    'last_called_empty' => '最近通话: 未知',
    'last_activity_date' => '最近一起的活动: :date',
    'last_activity_date_empty' => '最后一起的活动: 未知',

    // additional information
    'information_edit_success' => '记录更新成功',
    'information_edit_title' => '编辑 :name的个人信息',
    'information_edit_avatar' => '联系人照片/头像',
    'information_edit_max_size' => '最大值 :size Mb。',
    'information_edit_firstname' => '名',
    'information_edit_lastname' => '姓（可选）',
    'information_edit_linkedin' => 'LinkedIn 信息 (可选)',
    'information_edit_unknown' => '我不知道具体年龄',
    'information_edit_probably' => '此人可能是...',
    'information_edit_not_year' => '我知道这个人的生日的日期和月份, 但不知道哪一年。',
    'information_edit_exact' => '我知道这个人的确切出生日期...',
    'information_no_linkedin_defined' => '没有定义LinkedIn',
    'information_no_work_defined' => '未定义工作信息',
    'information_work_at' => '在 :company',
    'linkedin_profile' => '领英®上的个人资料',
    'work_add_cta' => '更新工作信息',
    'work_edit_success' => '工作信息已成功更新',
    'work_edit_title' => '更新:name的工作信息',
    'work_edit_job' => '职位名称 (可选)',
    'work_edit_company' => '公司 (可选)',
    'work_information' => '工作信息',

    // food preferencies
    'food_preferencies_add_success' => '食品偏好已被保存',
    'food_preferencies_edit_description' => '也许:firstname或:family的家庭有过敏，或者不喜欢一瓶特定的酒等。把这些信息列在这里，在下次和邀请他们吃饭时可以在这里看到这些信息。',
    'food_preferencies_edit_description_no_last_name' => '也许:firstname有过敏情况，或者不喜欢一瓶特定的酒等。把这些信息列在这里，在下次和邀请他们吃饭时可以在这里看到这些信息。',
    'food_preferencies_edit_title' => '注明食物偏好',
    'food_preferencies_edit_cta' => '保存食物偏好',
    'food_preferencies_title' => '食物偏好',
    'food_preferencies_cta' => '添加食物偏好',

    // reminders
    'reminders_blank_title' => '您有什么关于:name的提醒吗？',
    'reminders_blank_add_activity' => '添加提醒',
    'reminders_add_title' => '你需要关于:name的提醒吗？',
    'reminders_add_description' => '请提醒我...',
    'reminders_add_next_time' => '您希望下一次关于这个的提醒的时间是？',
    'reminders_add_once' => '就提醒我一次',
    'reminders_add_recurrent' => '提醒我 每',
    'reminders_add_starting_from' => '从上面指定的日期开始',
    'reminders_add_cta' => '添加提醒',
    'reminders_edit_update_cta' => '更新提醒',
    'reminders_add_error_custom_text' => '您需要为此提醒指定文本',
    'reminders_create_success' => '已成功添加提醒',
    'reminders_delete_success' => '已成功删除提醒',
    'reminders_update_success' => '已成功更新提醒',

    'reminder_frequency_day' => '每天 | 每:number天',
    'reminder_frequency_week' => '每周 | 每:number星期',
    'reminder_frequency_month' => '每月 | 每:number月',
    'reminder_frequency_year' => '每年 | 每:number年',
    'reminder_frequency_one_time' => '在:date',
    'reminders_delete_confirmation' => '确实要删除此提醒吗？',
    'reminders_delete_cta' => '删除',
    'reminders_next_expected_date' => '在',
    'reminders_cta' => '添加提醒',
    'reminders_description' => '我们将发送电子邮件的每一个提醒如下。每天早上都会发出提醒,。无法删除自动为生日添加的提醒。如果要更改这些日期, 请编辑联系人的生日。',
    'reminders_one_time' => '一次性',
    'reminders_type_week' => '周',
    'reminders_type_month' => '月',
    'reminders_type_year' => '年',
    'reminders_birthday' => ':name的生日',
    'reminders_free_plan_warning' => '你在自由计划。这个计划没有发送电子邮件。要通过电子邮件收到提醒, 请升级您的帐户。',

    // relationships
    'relationship_form_add' => '添加一个新的关系',
    'relationship_form_edit' => '修改一个已有关系',
    'relationship_form_is_with' => '这个人是...',
    'relationship_form_add_choice' => '这是与谁的关系？',
    'relationship_form_create_contact' => '添加一个新的人',
    'relationship_form_associate_contact' => '导入一位已存在的联系人',
    'relationship_form_associate_dropdown' => 'Search and select an existing contact from the dropdown below',
    'relationship_form_associate_dropdown_placeholder' => 'Search and select an existing contact',
    'relationship_form_also_create_contact' => '将此人创建为您的联系人',
    'relationship_form_add_description' => '此选项能让您将其创建为您Monica中的联系人',
    'relationship_form_add_no_existing_contact' => '您暂时没有能与 :name 链接的联系人',
    'relationship_delete_confirmation' => '您确定要将关系删除吗？本操作无法撤销。',
    'relationship_unlink_confirmation' => '您确定要将关系删除吗？此操作不会从您的联系人列表将其删除。',
    'relationship_form_add_success' => '关系设置完成',
    'relationship_form_deletion_success' => '此关系已删除',

    // tasks
    'tasks_blank_title' => '您暂时还没任务。',
    'tasks_form_title' => '标题',
    'tasks_form_description' => '描述 (可选)',
    'tasks_add_task' => '添加任务',
    'tasks_delete_success' => '成功删除任务！',
    'tasks_complete_success' => '成功变更任务！',

    // activities
    'activity_title' => '活动',
    'activity_type_category_simple_activities' => '一般活动',
    'activity_type_category_sport' => '运动',
    'activity_type_category_food' => '食物',
    'activity_type_category_cultural_activities' => '文化',
    'activity_type_just_hung_out' => '仅约会',
    'activity_type_watched_movie_at_home' => '在家看片',
    'activity_type_talked_at_home' => '在家聊天',
    'activity_type_did_sport_activities_together' => '一起运动',
    'activity_type_ate_at_his_place' => '在对方家里做客',
    'activity_type_went_bar' => '泡吧',
    'activity_type_ate_at_home' => '在家吃',
    'activity_type_picknicked' => '郊游',
    'activity_type_ate_restaurant' => '在饭店吃',
    'activity_type_went_theater' => '去剧院',
    'activity_type_went_concert' => '去音乐会',
    'activity_type_went_play' => '出去玩',
    'activity_type_went_museum' => '去博物馆',
    'activities_add_activity' => '添加活动',
    'activities_more_details' => '更多详情',
    'activities_hide_details' => '隐藏详情',
    'activities_delete_confirmation' => '确实要删除此活动吗?',
    'activities_item_information' => ':Activity，发生于:date',
    'activities_add_title' => '你与:name做了什么？',
    'activities_summary' => '描述你做了什么',
    'activities_add_pick_activity' => '活动分类(可选)',
    'activities_add_date_occured' => '发生此活动的日期',
    'activities_add_optional_comment' => '可选注释',
    'activities_add_cta' => '记录活动',
    'activities_blank_title' => '记录您与 :name 之间的点滴',
    'activities_blank_add_activity' => '添加活动',
    'activities_add_success' => '已成功添加活动',
    'activities_add_error' => '添加活动时出现错误',
    'activities_update_success' => '活动已成功更新',
    'activities_delete_success' => '活动已成功删除',
    'activities_who_was_involved' => '谁参与了？',
    'activities_activity' => '活动类别',
    'activities_view_activities_report' => 'View activities report',
    'activities_profile_title' => 'Activities report between :name and you',
    'activities_profile_subtitle' => 'You’ve logged :total_activities activities with :name in total and :activities_last_twelve_months in the last 12 months so far.',
    'activities_profile_year_summary_activity_types' => 'Here is a breakdown of the type of activities you’ve done together in :year',
    'activities_profile_year_summary' => 'Here is what you two have done in :year',
    'activities_profile_number_occurences' => '{0,1}:value activity|{2,*}:value activities',

    // notes
    'notes_create_success' => '注释已成功创建',
    'notes_update_success' => '便笺已成功保存',
    'notes_delete_success' => '注释已成功删除',
    'notes_add_cta' => '添加注释',
    'notes_favorite' => '添加/删除喜爱标记',
    'notes_delete_title' => '删除标记',
    'notes_delete_confirmation' => '确实要删除此便笺吗？删除是永久性的',

    // gifts
    'gifts_title' => '礼物',
    'gifts_add_success' => '已成功添加礼品',
    'gifts_delete_success' => '礼品已成功删除',
    'gifts_delete_confirmation' => '是否确实要删除此礼品？',
    'gifts_add_gift' => '添加礼品',
    'gifts_link' => '链接',
    'gifts_for' => '给：',
    'gifts_delete_cta' => '删除',
    'gifts_add_title' => ':name礼品管理',
    'gifts_add_gift_idea' => '礼品创意',
    'gifts_add_gift_already_offered' => '礼品赠送',
    'gifts_add_gift_received' => '收到的礼物',
    'gifts_add_gift_title' => '这是什么礼物？',
    'gifts_add_link' => '链接到网页 (可选)',
    'gifts_add_value' => '值 (可选)',
    'gifts_add_comment' => '注释 (可选)',
    'gifts_add_someone' => '这个礼物是送给:name的家人',
    'gifts_ideas' => '礼品创意',
    'gifts_offered' => '提供的礼品',
    'gifts_offered_as_an_idea' => '标记为心愿单',
    'gifts_received' => '收到的礼物',
    'gifts_view_comment' => '查看评论',
    'gifts_mark_offered' => '标记为提供',
    'gifts_update_success' => '礼品已成功更新',

    // debts
    'debt_delete_confirmation' => '是否确实要删除此债务？',
    'debt_delete_success' => '已成功删除债务',
    'debt_add_success' => '已成功添加债务',
    'debt_title' => '债务',
    'debt_add_cta' => '增加债务',
    'debt_you_owe' => '您欠:amount',
    'debt_they_owe' => ':name欠您:amount',
    'debt_add_title' => '债务管理',
    'debt_add_you_owe' => '你欠:name',
    'debt_add_they_owe' => ':name欠你的',
    'debt_add_amount' => '的总和',
    'debt_add_reason' => '出于以下原因 (可选)',
    'debt_add_add_cta' => '增加债务',
    'debt_edit_update_cta' => '更新债务',
    'debt_edit_success' => '债务已成功更新',
    'debts_blank_title' => '管理您欠的债务您欠:name的或:name欠您的',

    // tags
    'tag_edit' => '编辑标签',
    'tag_add' => '添加标签',

    // Introductions
    'introductions_sidebar_title' => '你是如何相遇的',
    'introductions_blank_cta' => '指示您如何遇到的:name',
    'introductions_title_edit' => '你是怎么认识:name的？',
    'introductions_additional_info' => '你在哪里相遇',
    'introductions_edit_met_through' => '有人把你介绍给这个人吗？',
    'introductions_no_met_through' => '没有人',
    'introductions_first_met_date' => '你遇见的日期',
    'introductions_no_first_met_date' => '我不记得具体日期',
    'introductions_first_met_date_known' => '这是我们相遇的日子',
    'introductions_add_reminder' => '添加提醒以庆祝此事件发生的周年纪念',
    'introductions_update_success' => '你成功更新了关于你们相识的故事',
    'introductions_met_through' => '通过 <a href=":url">:name</a>遇到',
    'introductions_met_date' => '在:date遇到',
    'introductions_reminder_title' => '你第一次遇见的那一天的周年纪念日',

    // Deceased
    'deceased_reminder_title' => ':name的去世周年怀念',
    'deceased_mark_person_deceased' => '将此人标记为已逝者',
    'deceased_know_date' => '我知道这个人去世日期',
    'deceased_add_reminder' => '为此日期添加提醒',
    'deceased_label' => '世者',
    'deceased_label_with_date' => '在:date去世',
    'deceased_age' => '享年',

    // Contact information
    'contact_info_title' => '联系信息',
    'contact_info_form_content' => '内容',
    'contact_info_form_contact_type' => '联系方式',
    'contact_info_form_personalize' => '个性化',
    'contact_info_address' => '生活在',

    // Addresses
    'contact_address_title' => '地址',
    'contact_address_form_name' => '标签 (可选)',
    'contact_address_form_street' => '街 (可选)',
    'contact_address_form_city' => '城市 (可选)',
    'contact_address_form_province' => '省 (可选)',
    'contact_address_form_postal_code' => '邮政编码 (可选)',
    'contact_address_form_country' => '国家 (可选)',

    // Pets
    'pets_kind' => '宠物种类',
    'pets_name' => '名字 (可选)',
    'pets_create_success' => '已成功添加宠物',
    'pets_update_success' => '宠物已更新',
    'pets_delete_success' => '宠物已被删除',
    'pets_title' => '宠物',
    'pets_reptile' => '爬行动物',
    'pets_bird' => '鸟',
    'pets_cat' => '猫',
    'pets_dog' => '狗',
    'pets_fish' => '鱼',
    'pets_hamster' => '仓鼠',
    'pets_horse' => '马',
    'pets_rabbit' => '兔子',
    'pets_rat' => '鼠',
    'pets_small_animal' => '小动物',
    'pets_other' => '其它',
];
