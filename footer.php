<footer>
            <p>© 2020 Profile</p>
        </footer>
        <script type="module" src="/js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script> 
        <script>
            gsap.fromTo( '.bike1',
	            {
		            x: "-100%",
		            autoAlpha: 0
	            },
	            {
		            x: 0,
		            autoAlpha: 1,
		            delay: 0,
		            duration: .5,
		            scrollTrigger: {
			            trigger: 'bike1',
			            start: 'center center',
			            markers: true,
		            },
		            stagger: {
			            each: .5,
			            from: 'start',
		            }
	            }
            );
            gsap.fromTo( '.bike2',
	            {
		            y: "100%",
		            autoAlpha: 0
	            },
	            {
		            y: 0,
		            autoAlpha: 1,
		            delay: 0,
		            duration: .5,
		            scrollTrigger: {
			            trigger: 'bike1',
			            start: 'center center',
			            markers: true,
		            },
		            stagger: {
			            each: .5,
			            from: 'start',
		            }
	            }
            );            
            gsap.fromTo( '.bike3',
	            {
		            x: "100%",
		            autoAlpha: 0
	            },
	            {
		            x: 0,
		            autoAlpha: 1,
		            delay: 0,
		            duration: .5,
		            scrollTrigger: {
			            trigger: 'bike1',
			            start: 'center center',
			            markers: true,
		            },
		            stagger: {
			        each: .5,
			        from: 'start',
		            }
	            }
            );
        </script>
        </body>
</html>