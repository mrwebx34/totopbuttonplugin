<style>
.To_top_btn a {
  display: block;
  font-size: 16px;
  width: 50px;
  height: 50px;
  line-height: 50px;
  -webkit-border-radius: 50px;
  text-align: center;
  border-radius: 50px;
  background: <?php echo get_option( 'WP_to_top_color' ) ?>;
  color: #ffffff;
  -webkit-box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.3);
  box-shadow: 1px 1px 4px 1px rgba(0, 0, 0, 0.3);
  z-index: 2147483647;
  text-decoration: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
}
.To_top_btn a:hover,
.To_top_btn a:focus,
.To_top_btn a:active {
  color: #ffffff;
  background: grey;
}

.To_top_btn a:visited {
  color: #ffffff;
}
</style>
