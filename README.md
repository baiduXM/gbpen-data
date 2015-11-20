# 启用本地模拟服务器环境调试

假定主项目仓库名：unify，数据项目仓库(本仓库)名：unify-data


1. 克隆本仓库到新目录（假设平级目录unify-data）

2. 初始化unify-data工作流创建本地develop分支（选中dev-init来分支）
删除本地dev-init分支，develop分支不做推送。

3. 将主项目unify目录下以下所有全部剪切至unify-data项目目录覆盖！
app/config/local/
app/views/templates/
public/temp_templates/
public/templates/

4. 修改bootstrap/start.php文件中29行'homestead'改为自己的电脑主机名（ipconfig /all命令查看主机名）
到unify-data下提交所有本地模板文件到develop分支（以后本地模板目录数据有变更都需提交到这里

6. 到主项目unify目录下执行以下代码关联目录：
mklink /j app\config\local ..\unify-data\app\config\local
mklink /j public\templates ..\unify-data\public\templates
mklink /j public\temp_templates ..\unify-data\public\temp_templates
mklink /j app\views\templates ..\unify-data\app\views\templates


## ！！注意！！

 - 本地开发都请切换unify-data至develop分支，本地模板如有更新
   所有变化需在切换unify-data环境分支前提交至develop分支；
 - 需要调试5067服务器时，请切换分支至5067，此时所有模板文件包括数据库都连接到5067服务器。

 - 本地调试的代码修改还是在主项目unify下提交；
 - 如有修改到(5067分支的)模板目录代码，仅做本地调试用，调试完毕后丢弃修改！
