(function ($) {
	$.fn.shareButtons = function (options) {
		var settings = $.extend({
			isMobile: /iPhone|iPad|iPod|Android/i.test(navigator.userAgent)
		}, options);

		return this.each(function () {
			$('body').prepend('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">');
			$('.sb-Container').append(
				`<ul class="ulStyle">
					<li class="liStyle facebook">
						<a href="https://www.facebook.com/sharer.php?u=${settings.url}" class="nw">
							<span class="spani"><i class="fa fa-facebook iconStyle" aria-hidden="true"></i></span>
						</a>
					</li>
					<li class="liStyle vk">
						<a href="https://www.instagram.com/printagram18/?hl=de" class="nw">
							<span class="spani"><i class="fa fa-instagram iconStyle" aria-hidden="true"></i></span>
						</a>
					</li>
					<li class="liStyle wa">
						<a href="https://bit.ly/2FyOrhn" class="nw">
							<span class="spani"><i class="fa fa-whatsapp iconStyle" aria-hidden="true"></i></span>
						</a>
					</li>
				</ul>`
			);

			$('.liStyle').css({
				'width': settings.buttonSize, 'height': settings.buttonSize,
				'margin': settings.spaceBetweenButtons, 'border-radius': settings.radius
			});
			if (settings.buttonsAlign == 'horizontal') {
				$('.liStyle').css('float', 'left');
			} else {
				$('.liStyle').css('float', 'none');
			}

			$('.iconStyle').css({ 'font-size': settings.iconSize, 'color': settings.iconColor });
			$('.iconStyle').parent().hover(function () {
				$(this).children().css('color', settings.iconColorOnHover);
			}, function () {
				$(this).children().css('color', settings.iconColor);
			});

			var facebook = $('.facebook');
			facebook.css('background-color', settings.facebookBgr);
			facebook.hover(function () {
				$(this).css('background-color', settings.facebookBgrOnHover);
			}, function () {
				$(this).css('background-color', settings.facebookBgr);
			});
			if (settings.showFacebookBtn == 'show') {
				facebook.css('display', 'block');
			} else {
				facebook.css('display', 'none');
			}

			var twitter = $('.twitter');
			twitter.css('background-color', settings.twitterBgr);
			twitter.hover(function () {
				$(this).css('background-color', settings.twitterBgrOnHover);
			}, function () {
				$(this).css('background-color', settings.twitterBgr);
			});
			if (settings.showTwitterBtn == 'show') {
				twitter.css('display', 'block');
			} else {
				twitter.css('display', 'none');
			}

			var pinterest = $('.pinterest');
			pinterest.css('background-color', settings.pinterestBgr);
			pinterest.hover(function () {
				$(this).css('background-color', settings.pinterestBgrOnHover);
			}, function () {
				$(this).css('background-color', settings.pinterestBgr);
			});
			if (settings.showPinterestBtn == 'show') {
				pinterest.css('display', 'block');
			} else {
				pinterest.css('display', 'none');
			}

			var linkedin = $('.linkedin');
			linkedin.css('background-color', settings.linkedinBgr);
			linkedin.hover(function () {
				$(this).css('background-color', settings.linkedinBgrOnHover);
			}, function () {
				$(this).css('background-color', settings.linkedinBgr);
			});
			if (settings.showLinkedinBtn == 'show') {
				linkedin.css('display', 'block');
			} else {
				linkedin.css('display', 'none');
			}

			var vk = $('.vk');
			vk.css('background-color', settings.vkBgr);
			vk.hover(function () {
				$(this).css('background-color', settings.vkBgrOnHover);
			}, function () {
				$(this).css('background-color', settings.vkBgr);
			});
			if (settings.showVkBtn == 'show') {
				vk.css('display', 'block');
			} else {
				vk.css('display', 'none');
			}

			var wa = $('.wa');
			wa.css('background-color', settings.waBgr);
			wa.hover(function () {
				$(this).css('background-color', settings.waBgrOnHover);
			}, function () {
				$(this).css('background-color', settings.waBgr);
			});
			if (settings.showWaBtn == 'show') {
				wa.css('display', 'block');
			} else {
				wa.css('display', 'none');
			}

			var viber = $('.viber');
			viber.css('background-color', settings.viberBgr);
			viber.hover(function () {
				$(this).css('background-color', settings.viberBgrOnHover);
			}, function () {
				$(this).css('background-color', settings.viberBgr);
			});
			if (settings.showViberBtn == 'show') {
				viber.css('display', 'block');
			} else {
				viber.css('display', 'none');
			}

			var email = $('.email');
			email.css('background-color', settings.emailBgr);
			email.hover(function () {
				$(this).css('background-color', settings.emailBgrOnHover);
			}, function () {
				$(this).css('background-color', settings.emailBgr);
			});
			if (settings.showEmailBtn == 'show') {
				email.css('display', 'block');
			} else {
				email.css('display', 'none');
			}

			var print = $('.print');
			print.css('background-color', settings.printBgr);
			$(function () {
				print.on('mouseenter touchstart', function () {
					$(this).css('background-color', settings.printBgrOnHover);
				});
				print.on('mouseleave touchend', function () {
					$(this).css('background-color', settings.printBgr);
				});
			});

			if (settings.showPrintBtn == 'show') {
				print.css('display', 'block');
			} else {
				print.css('display', 'none');
			}

		});
	}

	setTimeout(function () {
		(function (a) {
			a.fn.popupWindow = function (b) {
				return this.each(function () {
					a(this).click(function () {
						if (a(this).parent().hasClass('print') || a(this).parent().hasClass('email')) {
							return false;
						} else {
							a.fn.popupWindow.defaultSettings = {
								centerBrowser: 0,
								centerScreen: 0,
								height: 500,
								left: 0,
								location: 0,
								menubar: 0,
								resizable: 0,
								scrollbars: 0,
								status: 0,
								width: 500,
								windowName: null,
								windowURL: null,
								top: 0,
								toolbar: 0
							};
							settings = a.extend({}, a.fn.popupWindow.defaultSettings, b || {});
							var c = "height=" + settings.height + ",width=" + settings.width + ",toolbar=" + settings.toolbar + ",scrollbars=" + settings.scrollbars + ",status=" + settings.status + ",resizable=" + settings.resizable + ",location=" + settings.location + ",menuBar=" + settings.menubar;
							settings.windowName = this.name || settings.windowName;
							settings.windowURL = this.href || settings.windowURL;
							var d, e;
							if (settings.centerBrowser) {
								d = window.screenY + (((window.outerHeight / 2) - (settings.height / 2)));
								e = window.screenX + (((window.outerWidth / 2) - (settings.width / 2)))
								window.open(settings.windowURL, settings.windowName, c + ", left=" + e + ", top=" + d).focus()
							} else {
								if (settings.centerScreen) {
									d = (screen.height - settings.height) / 2;
									e = (screen.width - settings.width) / 2;
									window.open(settings.windowURL, settings.windowName, c + ", left=" + e + ", top=" + d).focus()
								} else {
									window.open(settings.windowURL, settings.windowName, c + ", left=" + settings.left + ", top=" + settings.top).focus()
								}
							}
						}
						return false
					})
				})
			}
		})(jQuery);

		$('.nw').popupWindow({
			height: 500,
			width: 800,
			centerBrowser: 1,
			scrollbars: 1
		});
	}, 100)
}(jQuery));