<?php
/**
 * The banner template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package luxxy
 */

?>

<div class="sticky-stopper"></div>

<?php $feat_image = get_the_post_thumbnail_url( $post->ID, 'full' ); ?>

<section id="howitworks">

	<div class="container">

		<div class="row">

			<h2>How It Works</h2>

			<?php the_field( 'hiw_intro', 'options' ); ?>

			<div class="steps">

				<div class="step">
					<img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDI1MC4zMTMgMjUwLjMxMyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjUwLjMxMyAyNTAuMzEzOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjY0cHgiIGhlaWdodD0iNjRweCI+CjxnIGlkPSJTZWFyY2giPgoJPHBhdGggc3R5bGU9ImZpbGwtcnVsZTpldmVub2RkO2NsaXAtcnVsZTpldmVub2RkOyIgZD0iTTI0NC4xODYsMjE0LjYwNGwtNTQuMzc5LTU0LjM3OGMtMC4yODktMC4yODktMC42MjgtMC40OTEtMC45My0wLjc2ICAgYzEwLjctMTYuMjMxLDE2Ljk0NS0zNS42NiwxNi45NDUtNTYuNTU0QzIwNS44MjIsNDYuMDc1LDE1OS43NDcsMCwxMDIuOTExLDBTMCw0Ni4wNzUsMCwxMDIuOTExICAgYzAsNTYuODM1LDQ2LjA3NCwxMDIuOTExLDEwMi45MSwxMDIuOTExYzIwLjg5NSwwLDQwLjMyMy02LjI0NSw1Ni41NTQtMTYuOTQ1YzAuMjY5LDAuMzAxLDAuNDcsMC42NCwwLjc1OSwwLjkyOWw1NC4zOCw1NC4zOCAgIGM4LjE2OSw4LjE2OCwyMS40MTMsOC4xNjgsMjkuNTgzLDBDMjUyLjM1NCwyMzYuMDE3LDI1Mi4zNTQsMjIyLjc3MywyNDQuMTg2LDIxNC42MDR6IE0xMDIuOTExLDE3MC4xNDYgICBjLTM3LjEzNCwwLTY3LjIzNi0zMC4xMDItNjcuMjM2LTY3LjIzNWMwLTM3LjEzNCwzMC4xMDMtNjcuMjM2LDY3LjIzNi02Ny4yMzZjMzcuMTMyLDAsNjcuMjM1LDMwLjEwMyw2Ny4yMzUsNjcuMjM2ICAgQzE3MC4xNDYsMTQwLjA0NCwxNDAuMDQzLDE3MC4xNDYsMTAyLjkxMSwxNzAuMTQ2eiIgZmlsbD0iI0ZGRkZGRiIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
					<h3>Search Our Properties</h3>
				</div><!--

				--><div class="step">
					<img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjY0cHgiIGhlaWdodD0iNjRweCIgdmlld0JveD0iMCAwIDQ4OC4xNTIgNDg4LjE1MiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDg4LjE1MiA0ODguMTUyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTE3Ny44NTQsMjY5LjMxMWMwLTYuMTE1LTQuOTYtMTEuMDY5LTExLjA4LTExLjA2OWgtMzguNjY1Yy02LjExMywwLTExLjA3NCw0Ljk1NC0xMS4wNzQsMTEuMDY5djM4LjY2ICAgIGMwLDYuMTIzLDQuOTYxLDExLjA3OSwxMS4wNzQsMTEuMDc5aDM4LjY2NWM2LjEyLDAsMTEuMDgtNC45NTYsMTEuMDgtMTEuMDc5VjI2OS4zMTFMMTc3Ljg1NCwyNjkuMzExeiIgZmlsbD0iI0ZGRkZGRiIvPgoJCTxwYXRoIGQ9Ik0yNzQuNDgzLDI2OS4zMTFjMC02LjExNS00Ljk2MS0xMS4wNjktMTEuMDY5LTExLjA2OWgtMzguNjdjLTYuMTEzLDAtMTEuMDc0LDQuOTU0LTExLjA3NCwxMS4wNjl2MzguNjYgICAgYzAsNi4xMjMsNC45NjEsMTEuMDc5LDExLjA3NCwxMS4wNzloMzguNjdjNi4xMDgsMCwxMS4wNjktNC45NTYsMTEuMDY5LTExLjA3OVYyNjkuMzExeiIgZmlsbD0iI0ZGRkZGRiIvPgoJCTxwYXRoIGQ9Ik0zNzEuMTE3LDI2OS4zMTFjMC02LjExNS00Ljk2MS0xMS4wNjktMTEuMDc0LTExLjA2OWgtMzguNjY1Yy02LjEyLDAtMTEuMDgsNC45NTQtMTEuMDgsMTEuMDY5djM4LjY2ICAgIGMwLDYuMTIzLDQuOTYsMTEuMDc5LDExLjA4LDExLjA3OWgzOC42NjVjNi4xMTMsMCwxMS4wNzQtNC45NTYsMTEuMDc0LTExLjA3OVYyNjkuMzExeiIgZmlsbD0iI0ZGRkZGRiIvPgoJCTxwYXRoIGQ9Ik0xNzcuODU0LDM2NS45NWMwLTYuMTI1LTQuOTYtMTEuMDc1LTExLjA4LTExLjA3NWgtMzguNjY1Yy02LjExMywwLTExLjA3NCw0Ljk1LTExLjA3NCwxMS4wNzV2MzguNjUzICAgIGMwLDYuMTE5LDQuOTYxLDExLjA3NCwxMS4wNzQsMTEuMDc0aDM4LjY2NWM2LjEyLDAsMTEuMDgtNC45NTYsMTEuMDgtMTEuMDc0VjM2NS45NUwxNzcuODU0LDM2NS45NXoiIGZpbGw9IiNGRkZGRkYiLz4KCQk8cGF0aCBkPSJNMjc0LjQ4MywzNjUuOTVjMC02LjEyNS00Ljk2MS0xMS4wNzUtMTEuMDY5LTExLjA3NWgtMzguNjdjLTYuMTEzLDAtMTEuMDc0LDQuOTUtMTEuMDc0LDExLjA3NXYzOC42NTMgICAgYzAsNi4xMTksNC45NjEsMTEuMDc0LDExLjA3NCwxMS4wNzRoMzguNjdjNi4xMDgsMCwxMS4wNjktNC45NTYsMTEuMDY5LTExLjA3NFYzNjUuOTV6IiBmaWxsPSIjRkZGRkZGIi8+CgkJPHBhdGggZD0iTTM3MS4xMTcsMzY1Ljk1YzAtNi4xMjUtNC45NjEtMTEuMDc1LTExLjA2OS0xMS4wNzVoLTM4LjY3Yy02LjEyLDAtMTEuMDgsNC45NS0xMS4wOCwxMS4wNzV2MzguNjUzICAgIGMwLDYuMTE5LDQuOTYsMTEuMDc0LDExLjA4LDExLjA3NGgzOC42N2M2LjEwOCwwLDExLjA2OS00Ljk1NiwxMS4wNjktMTEuMDc0VjM2NS45NUwzNzEuMTE3LDM2NS45NXoiIGZpbGw9IiNGRkZGRkYiLz4KCQk8cGF0aCBkPSJNNDQwLjI1NCw1NC4zNTR2NTkuMDVjMCwyNi42OS0yMS42NTIsNDguMTk4LTQ4LjMzOCw0OC4xOThoLTMwLjQ5M2MtMjYuNjg4LDAtNDguNjI3LTIxLjUwOC00OC42MjctNDguMTk4VjU0LjE0MiAgICBoLTEzNy40NHY1OS4yNjJjMCwyNi42OS0yMS45MzgsNDguMTk4LTQ4LjYyMiw0OC4xOThIOTYuMjM1Yy0yNi42ODUsMC00OC4zMzYtMjEuNTA4LTQ4LjMzNi00OC4xOTh2LTU5LjA1ICAgIEMyNC41NzYsNTUuMDU3LDUuNDExLDc0LjM1Niw1LjQxMSw5OC4wNzd2MzQ2LjA2MWMwLDI0LjE2NywxOS41ODgsNDQuMDE1LDQzLjc1NSw0NC4wMTVoMzg5LjgyICAgIGMyNC4xMzEsMCw0My43NTUtMTkuODg5LDQzLjc1NS00NC4wMTVWOTguMDc3QzQ4Mi43NDEsNzQuMzU2LDQ2My41NzcsNTUuMDU3LDQ0MC4yNTQsNTQuMzU0eiBNNDI2LjA5MSw0MjIuNTg4ICAgIGMwLDEwLjQ0NC04LjQ2OCwxOC45MTctMTguOTE2LDE4LjkxN0g4MC4xNDRjLTEwLjQ0OCwwLTE4LjkxNi04LjQ3My0xOC45MTYtMTguOTE3VjI0My44MzVjMC0xMC40NDgsOC40NjctMTguOTIxLDE4LjkxNi0xOC45MjEgICAgaDMyNy4wM2MxMC40NDgsMCwxOC45MTYsOC40NzMsMTguOTE2LDE4LjkyMUw0MjYuMDkxLDQyMi41ODhMNDI2LjA5MSw0MjIuNTg4eiIgZmlsbD0iI0ZGRkZGRiIvPgoJCTxwYXRoIGQ9Ik05Ni4xMjgsMTI5Ljk0NWgzMC4xNjJjOS4xNTUsMCwxNi41NzgtNy40MTIsMTYuNTc4LTE2LjU2N1YxNi41NzNDMTQyLjg2OCw3LjQxNywxMzUuNDQ1LDAsMTI2LjI5LDBIOTYuMTI4ICAgIEM4Ni45NzIsMCw3OS41NSw3LjQxNyw3OS41NSwxNi41NzN2OTYuODA1Qzc5LjU1LDEyMi41MzMsODYuOTcyLDEyOS45NDUsOTYuMTI4LDEyOS45NDV6IiBmaWxsPSIjRkZGRkZGIi8+CgkJPHBhdGggZD0iTTM2MS4wMzUsMTI5Ljk0NWgzMC4xNjJjOS4xNDksMCwxNi41NzItNy40MTIsMTYuNTcyLTE2LjU2N1YxNi41NzNDNDA3Ljc3LDcuNDE3LDQwMC4zNDcsMCwzOTEuMTk3LDBoLTMwLjE2MiAgICBjLTkuMTU0LDAtMTYuNTc3LDcuNDE3LTE2LjU3NywxNi41NzN2OTYuODA1QzM0NC40NTgsMTIyLjUzMywzNTEuODgxLDEyOS45NDUsMzYxLjAzNSwxMjkuOTQ1eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
					<h3>Check Availability</h3>
				</div><!--

				--><div class="step">
					<img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIuMDAxIDUxMi4wMDEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMi4wMDEgNTEyLjAwMTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI2NHB4IiBoZWlnaHQ9IjY0cHgiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik01MTEuNjQ2LDEyNi42MzRjLTAuMDIxLTE0LjQ0OS0xMS43ODItMjYuMTg5LTI2LjIyNy0yNi4xODljLTAuMDEyLDAtMC4wMjQsMC0wLjAzNCwwTDI2LjE5LDEwMS4wNzYgICAgYy03LjAwNSwwLjAwOS0xMy41ODgsMi43NDYtMTguNTM1LDcuNzA2QzIuNzA5LDExMy43NDMtMC4wMDksMTIwLjMzNCwwLDEyNy4zMzdsMC4zNTUsMjU4LjAyOSAgICBjMC4wMDksNy4wMDUsMi43NDYsMTMuNTg4LDcuNzA2LDE4LjUzNWM0Ljk1MSw0LjkzOCwxMS41MjYsNy42NTUsMTguNTE5LDcuNjU1YzAuMDEyLDAsMC4wMjUsMCwwLjAzNSwwbDQ1OS4xOTQtMC42MzEgICAgYzE0LjQ1OC0wLjAyLDI2LjIwNy0xMS43OTksMjYuMTktMjYuMjYxTDUxMS42NDYsMTI2LjYzNHogTTQ1Ni42MTEsMTI2LjcxTDI1Ni4wMiwyNjYuMTU0TDU1LjA0LDEyNy4yNjJMNDU2LjYxMSwxMjYuNzF6ICAgICBNMzQwLjg0NiwyOTIuNDcxbDExOC45NzEsOTIuMjY1bC00MDcuOTcyLDAuNTZsMTE5LjY5Ni05Mi44MjVjNS43MjItNC40MzksNi43NjQtMTIuNjc1LDIuMzI2LTE4LjM5OSAgICBjLTQuNDM5LTUuNzIyLTEyLjY3NS02Ljc2NC0xOC4zOTktMi4zMjZMMjYuNTYxLDM3MS43MTVsLTAuMzItMjMyLjQ3NWwyMjIuMzQ0LDE1My42NTdjMi4yNDQsMS41NTEsNC44NDksMi4zMjUsNy40NTUsMi4zMjUgICAgYzIuNjE3LDAsNS4yMzYtMC43ODMsNy40ODUtMi4zNDZsMjIxLjkxMi0xNTQuMjY0bDAuMzM2LDIzMy4wNjZsLTEyOC44NTYtOTkuOTMxYy01LjcxOS00LjQzNy0xMy45NTktMy4zOTYtMTguMzk3LDIuMzI2ICAgIEMzMzQuMDgxLDI3OS43OTUsMzM1LjEyMiwyODguMDMzLDM0MC44NDYsMjkyLjQ3MXoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
					<h3>Make an Enquiry</h3>
				</div>
				
			</div>

			<a href="<?php home_url( '/properties' ); ?>" title="">View Our Villas</a>

		</div>
		
	</div>

</section>