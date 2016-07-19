<?php
get_header();
?>
<div class="fix">

    <div class="l col-2-3 loadBox">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="singleCourse mb30">

            <div class="moduleBox rel">
                <div class="p15">
                    <div class="courseName abs tac">
                        <h2>
                            <span><?php the_title();?></span>
                        </h2>
                    </div>
                    <div class="courseCoverImg">
                        <img src="<?php the_field('cover_img');?>" alt="<?php the_title();?>"/>
                    </div>
                    <div class="mt20 mb20 fix courseTable tac">

                        <div class="tableLeft l">
                            <table>
                                <thead>
                                <tr>
                                    <th>
                                        <span>发布时间</span>
                                    </th>
                                    <th>
                                        <span>价格</span>
                                    </th>
                                    <th>
                                        <span>课时</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                            <span>
                                                <?php the_field('pubdate');?>
                                            </span>
                                    </td>
                                    <td>
                                            <span class="price">
                                                <?php the_field('price');?>￥
                                            </span>
                                    </td>
                                    <td>
                                            <span>
                                                <?php the_field('class_hours');?>
                                            </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tableRight r">
                            <table>
                                <thead>
                                <tr>
                                    <th colSpan="2">
                                        <span>学习平台</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <span class="course_link">
                                            <a href="<?php the_field('link_study163');?>" title="网易云课堂"
                                               target="_blank">
                                                <svg viewBox="0 0 100 100">
                                                    <use xlink:href="#icon-study163"></use>
                                                </svg>
                                                <b>网易云课堂</b>
                                            </a>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="course_link">
                                            <a href="<?php the_field('link_taobao');?>" title="淘宝教育"
                                               target="_blank">
                                                <svg viewBox="0 0 100 100">
                                                    <use xlink:href="#icon-taobao"></use>
                                                </svg>
                                                <b>淘宝教育</b>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="courseContent postContent mt20">
                        <?php the_content();?>
                    </div>

                </div>
            </div>
        </div>
        <?php endwhile; endif; ?>

        <?php if (function_exists('oposts_show')) oposts_show(); ?>
        <?php comments_template(); ?>


    </div>
    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>

