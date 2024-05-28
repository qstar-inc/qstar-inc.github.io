// gitprofile.config.ts

const CONFIG = {
  github: {
    username: 'qstar-inc', // Your GitHub org/user name. (This is the only required config)
  },
  /**
   * If you are deploying to https://<USERNAME>.github.io/, for example your repository is at https://github.com/arifszn/arifszn.github.io, set base to '/'.
   * If you are deploying to https://<USERNAME>.github.io/<REPO_NAME>/,
   * for example your repository is at https://github.com/arifszn/portfolio, then set base to '/portfolio/'.
   */
  base: '/',
  projects: {
    github: {
      display: true, // Display GitHub projects?
      header: 'Github Projects',
      mode: 'automatic', // Mode can be: 'automatic' or 'manual'
      automatic: {
        sortBy: 'stars', // Sort projects by 'stars' or 'updated'
        limit: 100, // How many projects to display.
        exclude: {
          forks: true, // Forked projects will not be displayed if set to true.
          projects: [], // These projects will not be displayed. example: ['arifszn/my-project1', 'arifszn/my-project2']
        },
      },
      manual: {
        // Properties for manually specifying projects
        projects: ['arifszn/gitprofile', 'arifszn/pandora'], // List of repository names to display. example: ['arifszn/my-project1', 'arifszn/my-project2']
      },
    },
    external: {
      header: 'Cities Skylines II Code Mods',
      // To hide the `External Projects` section, keep it empty.
      projects: [
        {
          title: 'Simple Mod Checker',
          description:
            'Adds a persistent notification to the Main Menu, showing how many mods have loaded the current session.',
          imageUrl:
            'https://modscontent.paradox-interactive.com/cities_skylines_2/5599f857-1b79-46bf-b710-4388cda5e11f/content/cover.jpg',
          link: 'https://mods.paradoxplaza.com/mods/79186/Windows',
        },
        {
          title: 'Auto Vehicle Renamer',
          description:
            'Renames most vehicles with it\'s origin information when it spawns.',
          imageUrl:
            'https://modscontent.paradox-interactive.com/cities_skylines_2/7f2d546a-50bc-4864-96b1-c2a33ca4ec88/content/cover.jpg',
          link: 'https://mods.paradoxplaza.com/mods/79872/Windows',
        },
      ],
    },
    external2: {
      header: 'Cities Skylines II Assembly Assets',
      projects: [
        {
          title: 'Vanilla Ploppables Zoned Buildings',
          description:
            'Adds "ploppable" vanilla zoned buildings to the toolbar.',
          imageUrl:
            'https://modscontent.paradox-interactive.com/cities_skylines_2/677afe08-714a-4899-b3f6-7cd37a194e51/content/cover.jpg',
          link: 'https://mods.paradoxplaza.com/mods/79020/Windows',
        },
        {
          title: 'Vanilla Ploppables Service Buildings',
          description:
            'Adds "ploppable" vanilla service buildings to the toolbar.',
          imageUrl:
            'https://modscontent.paradox-interactive.com/cities_skylines_2/eff50e78-0ee9-444f-9ba2-da4eb5c24200/content/cover.jpg',
          link: 'https://mods.paradoxplaza.com/mods/79021/Windows',
        },
        {
          title: 'Mixed Residential Office Zoning',
          description:
            'Adds Mixed Residential buildings with office space at the bottom.',
          imageUrl:
            'https://modscontent.paradox-interactive.com/cities_skylines_2/d964469f-67c9-4e04-8964-3b2fe139186a/content/cover.jpg',
          link: 'https://mods.paradoxplaza.com/mods/79067/Windows',
        },
        {
          title: 'Company Mod - Paradox Interactive',
          description:
            'Adds "Paradox Interactive" company and decals.',
          imageUrl:
            'https://modscontent.paradox-interactive.com/cities_skylines_2/834ec2d3-b419-4dcf-8d7c-f235ccf720c5/content/cover.jpg',
          link: 'https://mods.paradoxplaza.com/mods/80939/Windows',
        },
        {
          title: 'Real World Petrochemical Companies',
          description:
            'Adds 7 real world petrochemical companies and its decals.',
          imageUrl:
            'https://modscontent.paradox-interactive.com/cities_skylines_2/65b6eca0-b389-4cb4-af69-daac3dc270b1/content/cover.jpg',
          link: 'https://mods.paradoxplaza.com/mods/81625/Windows',
        },
      ],
    },
  },
  seo: {
    title: 'StarQ / Qoushik',
    description: '',
    imageURL: '',
  },
  social: {
    website: '',
    phone: '',
    email: 'starqplays@gmail.com',
    linkedin: 'qstar07',
    twitter: 'qstar_inc',
    mastodon: '',
    researchGate: '',
    facebook: 'qstar.inc',
    instagram: 'qstar_inc',
    reddit: 'qstar_inc',
    threads: '@qstar_inc',
    youtube: 'StarQGaming',
    udemy: '',
    dribbble: '',
    behance: '',
    medium: '',
    dev: '',
    stackoverflow: '5021162/q-h-t',
    skype: '',
    telegram: '',
    paypal: 'qounik',
    patreon: 'StarQGaming',
    discord: 'StarQ',
    discordInvite: 'U2PSjUzUuF'
  },
  resume: {
    fileUrl:
      '', // Empty fileUrl will hide the `Download Resume` button.
  },
  skills: [
    'Python',
    'Lua',
    'HTML',
    'JavaScript',
    'CSS',
    'PHP',
    'Laravel',
    'Node.js',
    'MySQL',
    'Git',
    'Docker',
    'C#'
  ],
  // experiences: [
  //   {
  //     company: 'Company Name',
  //     position: 'Position',
  //     from: 'September 2021',
  //     to: 'Present',
  //     companyLink: 'https://example.com',
  //   },
  //   {
  //     company: 'Company Name',
  //     position: 'Position',
  //     from: 'July 2019',
  //     to: 'August 2021',
  //     companyLink: 'https://example.com',
  //   },
  // ],
  // certifications: [
  //   {
  //     name: 'Lorem ipsum',
  //     body: 'Lorem ipsum dolor sit amet',
  //     year: 'March 2022',
  //     link: 'https://example.com',
  //   },
  // ],
  educations: [
    {
      institution: 'Willes Little Flower School',
      degree: 'O Level',
      from: '',
      to: '2010',
    },
    {
      institution: 'British Council, Dhaka',
      degree: 'A Level',
      from: '',
      to: '2012',
    },
  ],
  publications: [
  ],
  // Display articles from your medium or dev account. (Optional)
  blog: {
    source: '', // medium | dev
    username: '', // to hide blog section, keep it empty
    limit: 0, // How many articles to display. Max is 10.
  },
  googleAnalytics: {
    id: '', // GA3 tracking id/GA4 tag id UA-XXXXXXXXX-X | G-XXXXXXXXXX
  },
  // Track visitor interaction and behavior. https://www.hotjar.com
  hotjar: {
    id: '',
    snippetVersion: 6,
  },
  themeConfig: {
    defaultTheme: 'procyon',

    // Hides the switch in the navbar
    // Useful if you want to support a single color mode
    disableSwitch: true,

    // Should use the prefers-color-scheme media-query,
    // using user system preferences, instead of the hardcoded defaultTheme
    respectPrefersColorScheme: false,

    // Display the ring in Profile picture
    displayAvatarRing: true,

    // Available themes. To remove any theme, exclude from here.
    themes: [
      'light',
      'dark',
      'cupcake',
      'bumblebee',
      'emerald',
      'corporate',
      'synthwave',
      'retro',
      'cyberpunk',
      'valentine',
      'halloween',
      'garden',
      'forest',
      'aqua',
      'lofi',
      'pastel',
      'fantasy',
      'wireframe',
      'black',
      'luxury',
      'dracula',
      'cmyk',
      'autumn',
      'business',
      'acid',
      'lemonade',
      'night',
      'coffee',
      'winter',
      'dim',
      'nord',
      'sunset',
      'procyon',
    ],

    // Custom theme, applied to `procyon` theme
    customTheme: {
      primary: '#2764AD',
      secondary: '#219aaf',
      accent: '#e8d03a',
      neutral: '#2A2730',
      'base-100': '#2F1947',
      '--rounded-box': '0rem',
      '--rounded-btn': '0rem',
    },
  },

  // Optional Footer. Supports plain text or HTML.
  footer: `Made with <a 
      class="text-primary" href="https://github.com/arifszn/gitprofile"
      target="_blank"
      rel="noreferrer"
    >GitProfile</a> and 💚`,

  enablePWA: false,
};

export default CONFIG;
