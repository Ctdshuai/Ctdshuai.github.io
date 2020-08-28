<div id="sidebar">

			<ul>
				<li>
					<h2>博主介绍</h2>
					<p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper consectetuer hendrerit.</p>
				</li>
				<li>
					<h2>分类目录</h2>
					<ul>
						<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>	
					</ul>
				</li>
                
                <li>
					<h2>最新文章</h2>
					<ul>
						<?php wp_get_archives('type=postbypost&limit=10'); ?>
					</ul>
				</li>
				<li>
					<h2>日期存档</h2>
					<ul>
						<?php wp_get_archives( 'type=monthly' ); ?>
					</ul>
				</li>
				<li>
					<h2>友情链接</h2>
					<ul>
						<?php wp_list_bookmarks('title_li=&categorize=0&orderby=rand&limit=24'); ?>
					</ul>
				</li>
                
                <li>
					<h2>功能</h2>
					<ul>
						<?php wp_register(); ?>
                        <?php wp_loginout(); ?>
					</ul>
				</li>
			</ul>
		</div>