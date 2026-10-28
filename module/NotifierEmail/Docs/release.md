## [Unreleased]

- 新增：模块 README 集成说明（module/NotifierEmail/README.md，其他系统集成先读此文件）
- 优化：截图命名统一为 `<设备前缀>.<页面>.png`（pc / pcFull / m / mFull，后台页面为 pc.）
- 优化：模块预览图路径统一到 Temp/ScreenShotImage
- 优化：截图脚本迁移到 Test/ScreenShot.php，截图产物输出到 Temp/ScreenShotImage
- 优化：邮件通知内容中的链接自动渲染为可点击链接
- 优化：多语言管理菜单显示优化

---

## 1.3.0 邮件通知查看内容增加链接复制能力

- 新增：邮件通知查看内容增加链接复制能力

---

## 1.2.0 调整管理菜单，处理链接优化显示

- 优化：调整后台管理菜单
- 优化：viewUrl不出现在页面链接上
- 优化：处理链接和查看链接样式显示优化

---

## 1.1.0 适配Laravel9，邮件格式优化

- 新增：适配Laravel9
- 新增：邮件处理链接操作
- 优化：邮件长段落换行样式调整
