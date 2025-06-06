<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<title>Abdellah | Admin Pannel</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- animation CSS -->
	<link rel="stylesheet" href="assets/css/animate.css">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

	<!-- Datatable CSS -->
	<link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/css/feather.css">

	<!-- Boxicons CSS -->
	<link rel="stylesheet" href="assets/plugins/boxicons/css/boxicons.min.css">

	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/plugins/owlcarousel/owl.theme.default.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
	<div id="global-loader">
		<div class="whirly-loader"> </div>
	</div>
	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		<?php require"header.php"; ?>
		<!-- /Header -->

		<!-- Sidebar -->
		<?php require"Sidebar.php"; ?>
		<!-- /Sidebar -->

		<div class="page-wrapper">
			<div class="content">
				<div class="page-header d-flex justify-content-end">
					<div>
						<ul class="table-top-head">
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="rotate"><i
										data-feather="rotate-ccw" class="feather-rotate-ccw"></i></a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse"
									id="collapse-header"><i data-feather="chevron-up"
										class="feather-chevron-up"></i></a>
							</li>
						</ul>
					</div>
				</div>


				<!-- /product list -->
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-xl-12">
								<div class="conference-meet-group">
									<div class="meeting-list">

										<!-- Horizontal View -->
										<div class="join-contents horizontal-view fade-whiteboard">
											<div class="join-video audio-calls user-active">
												<div class="audio-call-group">
													<ul>
														<li class="active">
															<div class="avatar ">
																<img src="assets/img/avatar/avatar-2.jpg"
																	class="rounded-circle" alt="image">
																<div class="more-icon">
																	<a href="javascript:void(0);">
																		<i class="feather feather-radio"></i>
																	</a>
																</div>
															</div>
															<div class="user-audio-call">
																<h5>Mark Villiams</h5>
															</div>
														</li>
														<li>
															<div class="avatar ">
																<img src="assets/img/users/user-16.jpg"
																	class="rounded-circle" alt="image">
																<div class="more-icon audio-more-icon">
																	<a href="javascript:void(0);" class="other-mic-off">
																		<i class="bx bx-microphone"></i>
																	</a>
																</div>
															</div>
															<div class="user-audio-call">
																<h5>Benjamin</h5>
															</div>
														</li>
													</ul>
												</div>
												<div class="record-time">
													<span>40:12</span>
												</div>
												<div class="meet-drop meet-mutes-bottom">
													<ul>
														<li><a href="javascript:void(0);" id="show-message"><i
																	class="bx bx-message-alt-dots"></i></a></li>
													</ul>
												</div>
											</div>

										</div>
										<!-- /Horizontal View -->

									</div>
									<div class="right-user-side chat-rooms theiaStickySidebar mb-2" id="chat-room">
										<div class=" slime-grp">
											<div class="left-chat-title">
												<div class="chat-title">
													<h4>Message</h4>
												</div>
												<div class="contact-close_call">
													<a href="#" class="close_profile close_profile4">
														<i data-feather="x"></i>
													</a>
												</div>
											</div>
											<div class="card-body-blk slimscroll  p-0">
												<div class="chat-msg-blk ">
													<div class="chats">
														<div class="chat-avatar">
															<img src="assets/img/users/user-01.jpg" class="dreams_chat"
																alt="image">
														</div>
														<div class="chat-content">
															<div class="message-content">
																<h4>Hi Everyone.!</h4>
															</div>
															<div class="chat-profile-name d-flex justify-content-end">
																<h6>10:00 AM</h6>
															</div>
														</div>
													</div>
													<div class="chats chats-right">
														<div class="chat-content">
															<div class="message-content">
																<h4>Good Morning..! Today we have meeting about the new
																	product.</h4>
															</div>
															<div class="chat-profile-name text-end">
																<h6><i class="bx bx-check-double"></i> 10:00</h6>
															</div>
														</div>
														<div class="chat-avatar">
															<img src="assets/img/users/user-02.jpg" class=" dreams_chat"
																alt="image">
														</div>
													</div>
													<div class="chats">
														<div class="chat-avatar">
															<img src="assets/img/users/user-01.jpg" class=" dreams_chat"
																alt="image">
														</div>
														<div class="chat-content">
															<div class="message-content">
																<h4>Hi.! Good Morning all.</h4>
															</div>
															<div class="chat-profile-name d-flex justify-content-end">
																<h6>10:00 AM</h6>
															</div>
														</div>
													</div>
													<div class="chats">
														<div class="chat-avatar">
															<img src="assets/img/users/user-01.jpg" class=" dreams_chat"
																alt="image">
														</div>
														<div class="chat-content">
															<div class="message-content">
																<h4>Nice..which category it belongs to?</h4>
															</div>
															<div class="chat-profile-name d-flex justify-content-end">
																<h6>10:00 AM</h6>
															</div>
														</div>
													</div>
													<div class="chats">
														<div class="chat-avatar">
															<img src="assets/img/users/user-01.jpg" class=" dreams_chat"
																alt="image">
														</div>
														<div class="chat-content">
															<div class="message-content">
																<h4>Great.! This is the second new product that comes in
																	this week.</h4>
															</div>
															<div class="chat-profile-name d-flex justify-content-end">
																<h6>10:00 AM</h6>
															</div>
														</div>
													</div>
													<div class="chats">
														<div class="chat-avatar">
															<img src="assets/img/users/user-01.jpg" class=" dreams_chat"
																alt="image">
														</div>
														<div class="chat-content">
															<div class="message-content">
																<h4>Hi.! Good Morning all.</h4>
															</div>
															<div class="chat-profile-name d-flex justify-content-end">
																<h6>10:00 AM</h6>
															</div>
														</div>
													</div>
													<div class="chats">
														<div class="chat-avatar">
															<img src="assets/img/users/user-01.jpg" class=" dreams_chat"
																alt="image">
														</div>
														<div class="chat-content">
															<div class="message-content">
																<h4>Nice..which category it belongs to?</h4>
															</div>
															<div class="chat-profile-name d-flex justify-content-end">
																<h6>10:00 AM</h6>
															</div>
														</div>
													</div>
													<div class="chats chats-right">
														<div class="chat-content">
															<div class="message-content">
																<h4>Good Morning..! Today we have meeting about the new
																	product.</h4>
															</div>
															<div class="chat-profile-name text-end">
																<h6><i class="bx bx-check-double"></i> 10:00</h6>
															</div>
														</div>
														<div class="chat-avatar">
															<img src="assets/img/users/user-02.jpg" class="dreams_chat"
																alt="image">
														</div>
													</div>
													<div class="chats">
														<div class="chat-avatar">
															<img src="assets/img/users/user-01.jpg" class=" dreams_chat"
																alt="image">
														</div>
														<div class="chat-content">
															<div class="message-content">
																<h4>Great.! This is the second new product that comes in
																	this week.</h4>
															</div>
															<div class="chat-profile-name d-flex justify-content-end">
																<h6>10:00 AM</h6>
															</div>
														</div>
													</div>
												</div>
												<div class="chat-footer">
													<form>
														<div class="smile-col comman-icon">
															<a href="#"><i class="far fa-smile"></i></a>
														</div>
														<div class="attach-col comman-icon">
															<a href="#"><i class="fas fa-paperclip"></i></a>
														</div>
														<div class="micro-col comman-icon">
															<a href="#"><i class="bx bx-microphone"></i></a>
														</div>
														<input type="text" class="form-control chat_form"
															placeholder="Enter Message.....">
														<div class="send-chat comman-icon">
															<a href="#"><i data-feather="send"></i></a>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="meet-call-menu-blk">
									<div class="video-call-action">
										<ul class="nav">
											<li><a href="javascript:void(0);" class="mute-bt "><i
														class="bx bx-microphone"></i></a></li>
											<li><a href="javascript:void(0);" class="call-end"><i
														data-feather="phone"></i></a></li>
											<li><a href="javascript:void(0);"><i class="bx bx-video-off"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /product list -->
			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->
	<div class="customizer-links" id="setdata">
		<ul class="sticky-sidebar">
			<li class="sidebar-icons">
				<a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left"
					data-bs-original-title="Theme">
					<i data-feather="settings" class="feather-five"></i>
				</a>
			</li>
		</ul>
	</div>

	<!-- jQuery -->
	<script src="assets/js/jquery-3.7.1.min.js"></script>

	<!-- Feather Icon JS -->
	<script src="assets/js/feather.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/js/jquery.slimscroll.min.js"></script>

	<!-- Datatable JS -->
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/dataTables.bootstrap5.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<!-- Owl JS -->
	<script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>

	<!-- Select2 JS -->
	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<!-- Sweetalert 2 -->
	<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
	<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

	<!-- Sticky Sidebar JS -->
	<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
	<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/theme-script.js"></script>
	<script src="assets/js/script.js"></script>

</body>

</html>