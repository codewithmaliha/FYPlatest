
    const tour = new Shepherd.Tour({
      defaultStepOptions: {
        classes: 'shepherd-theme-arrows',
        scrollTo: true,
      },
    });
  
    tour.addStep({
      id: 'step-1',
      text: 'This is the navigation bar!',
      attachTo: {
        element: '#navbar',
        on: 'bottom',
      },
      buttons: [
        {
          text: 'Next',
          action: tour.next,
        },
      ],
    });
  
    tour.addStep({
      id: 'step-2',
      text: 'This is the profile button!',
      attachTo: {
        element: '#categories',
        on: 'right',
      },
      buttons: [
        {
          text: 'Back',
          action: tour.back,
        },
        {
          text: 'Next',
          action: tour.next,
        },
      ],
    });
  
    tour.addStep({
      id: 'step-3',
      text: 'This is the logout button!',
      attachTo: {
        element: '#logout-button',
        on: 'left',
      },
      buttons: [
        {
          text: 'Back',
          action: tour.back,
        },
        {
          text: 'Finish',
          action: tour.complete,
        },
      ],
    });
  
    window.startTour = () => tour.start();

  