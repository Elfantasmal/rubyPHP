<p><span style="white-space:pre"></span><span style="font-size:32px; color:#ff0000; background-color:rgb(255,204,102)">rubyPHP���ص�ַ��<a target="_blank" href="http://download.csdn.net/detail/fanghailiang2016/9522167">http://download.csdn.net/detail/fanghailiang2016/9522167</a></span></p>
<p><span style="font-size:12px"><span style="white-space:pre"></span><em>ʹ�ù�CI��thinkPHP��CI��ȴ����ԭʼ��thinPHP����ǿ��ȴ̫���Ӵ󣬼�������ԭ�򣬻��˼���ʱ��д��һ����CI�����ȴ��thinkPHP���ܸ��ӵĿ�ܡ���rubyPHP��</em></span></p>
<p><span style="white-space:pre"></span><span style="font-size:18px">rubyPHP�ĸ��������������¼������棺</span></p>
<p><span style="font-size:18px; white-space:pre"></span><span style="font-size:18px">1.</span><strong><span style="font-size:24px">ҳ�滺��</span></strong><span style="font-size:18px">��<strong><span style="color:#ff0000; background-color:rgb(255,255,102)">ҳ�滺��ָ֮ǰ���ع���ҳ�����ļ���ʽ�����ڷ������У���һ��ʱ�����ٴμ�����ͬҳ��ʱ��������ִ��ҳ���߼�ֱ�Ӽ��ؾ�̬ҳ��</span></strong>��rubyPHP��ҳ�滺�����Զ����еģ���config/tpl.php�п������Ƿ����û����Լ������ļ�����Ч�ڡ���Ȼ�������ȫ�����ã��ڵ�����ͼʱ������ָ���Ƿ����û����Լ�������Ч�ڡ�</span></p>
<p><span style="font-size:18px; white-space:pre"></span><span style="font-size:18px">2.</span><strong><span style="font-size:24px">SQL����</span></strong><span style="font-size:18px">��<span style="background-color:rgb(255,255,102)"><span style="color:#ff0000">sql����ָ֮ǰִ�й��Ĳ�ѯsql����Լ����Ľ���������ڴ��У���һ��ʱ��������ͬ��sql���ִ�в�ѯ����ʱ���������ݿ�ֱ�ӷ����ڴ�������</span></span>��rubyPHPʹ��Redis�Լ�ֵ��ʽ����sql����Լ����Ķ�Ӧ�����rubyPHP�ܹ���php7���������С�����������windows
 php7 redis ��չ�����ز����ҵ���һƪ���ͣ�<a target="_blank" href="http://blog.csdn.net/fanghailiang2016/article/details/51396649">http://blog.csdn.net/fanghailiang2016/article/details/51396649</a>����rubyPHP��д��mysql_query�Լ�mongo_query��������ִ�в�ѯsql��ѯ���ʱ�����ȼ���δ���ڵĻ������ݡ���ҳ�滺�����ƣ�sql�����ȫ������·��Ϊconfig/redis.php���ھ���ִ��sql���ǰ������ִ���Ƿ�ʹ�û����Լ�������Ч�ڡ�</span></p>
<p><span style="font-size:18px"><span style="white-space:pre"></span>3.</span><span style="font-size:24px"><strong>��д����</strong></span><span style="font-size:18px">��<span style="color:#ff0000; background-color:rgb(255,204,102)"><strong>��д�����ǽ���������ͬ��������Ϊ�˼��������ѹ��������ѯ���ת�Ƶ��ӷ�������ִ�еĽ������</strong></span>��rubyPHP��д��mysql_query��mongo_query���������˶Բ�ѯ�������ڴ漶������Ż���ͬʱҲ����ѯ���ŵ��˴ӷ�������ִ�С�<a href="http://lib.csdn.net/base/14" class="replace_word" title="undefined" target="_blank" style="color:#df3434; font-weight:bold;">MySQL</a>�����������ļ�·��Ϊconfig/mysql.php��</span></p>
<p><span style="font-size:18px; white-space:pre"></span><span style="font-size:18px">4.</span><strong><span style="font-size:24px">htmlѹ��</span></strong><span style="font-size:18px">��htmlѹ�����ҳ�滺�棬ǰ�߽����˷�������ѹ�������߼��������������ռ�ռ䣬��html�ļ��еĿո��еȽ���ѹ��������������ļ��Ĵ�С����һ���̶��ϱ�����html�İ�ȫ��</span></p>
<p><span style="font-size:18px"><span style="white-space:pre"></span>rubyPHP�ڴ���ṹ��ģ��CI���ڹ�����ģ��thinkPHP��</span></p>
<p><span style="font-size:18px"><span style="white-space:pre"></span>rubyPHP�Ĺ��ܰ������¼����棺</span></p>
<p><span style="font-size:18px"><span style="white-space:pre"></span>1.</span><span style="font-size:24px"><strong>ʹ����thinkPHP��M�����������ݿ�</strong></span><span style="font-size:18px">������һЩ�򵥵�sql��������ֹ�д������Ϥ��M()-&gt;where()-&gt;limit()-&gt;find()�������﷨������ɡ�����������������ΪʲôthinkPHP��M�����ܹ�����������������������������ʹ����<strong>����ģʽ</strong>��</span></p>
<p><span style="font-size:18px"><span style="white-space:pre"></span>2.</span><span style="font-size:24px"><strong>���������ݿ�Ĳ���</strong></span><span style="font-size:18px">��M��������һ���ŵ����������sql��䣬�Ը߲��������ݿ���졣��Ȼ�����ڸ��ӵĲ�ѯ��M�������������ģ���ʱ����ʹ���ѱ���д����mysql_query�Լ�mongo_queryִ�����sql��䡣</span></p>
<p><span style="font-size:18px"><span style="white-space:pre"></span>3.</span><span style="font-size:24px"><strong>�Զ���·��</strong></span><span style="font-size:18px">����һ��ģ����CI��route.php����urlͬ��������ӳ���ϵд��һ�������ļ��</span></p>
<p><span style="font-size:18px"><span style="white-space:pre"></span>����֮����</span></p>
<p><span style="font-size:18px"><span style="white-space:pre"></span>view�ļ�1��֧�ֱ���ѭ�������Ŀǰ�Ľ��������ʹ��angularjs���ýӿ���ҳ��������ݡ����ʾ���������һ��ʹ��angularjs�ĺ�bootstrap�Ľ��档</span></p>
<p><span style="font-size:18px"><span style="white-space:pre"></span>�����ǽ����ͼ</span></p>
<p><span style="font-size:18px"><img src="" alt=""><img src="http://img.blog.csdn.net/20160517094547333?watermark/2/text/aHR0cDovL2Jsb2cuY3Nkbi5uZXQv/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70/gravity/SouthEast" alt=""><br>
</span></p>
<p><span style="font-size:18px"><span style="white-space:pre"></span>��������html��ѹ�������</span></p>
<p><span style="font-size:18px"><img src="" alt=""><img src="http://img.blog.csdn.net/20160517094611427?watermark/2/text/aHR0cDovL2Jsb2cuY3Nkbi5uZXQv/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70/gravity/SouthEast" alt=""><br>
</span></p>
<p><span style="font-size:18px">��ѯʱ�����˻���</span></p>
<p><span style="font-size:18px"><img src="" alt=""><br>
</span></p>
<p><span style="font-size:18px"><br>
</span></p>
<p><span style="font-size:18px"><br>
</span></p>
<p><span style="white-space:pre"></span></p>