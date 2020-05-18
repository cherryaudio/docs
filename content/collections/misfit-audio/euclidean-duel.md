title: 'Euclidean Duel'
body:
  -
    type: text
    text: '<h1><strong>EUCLIDEAN DUEL</strong></h1>'
  -
    type: image
    image:
      - /assets/modules/ug_euclidean-duel.jpg
    alignment: left
  -
    type: text
    text: '<p>The Euclidean Duel is a dual trigger sequencer with up to 16 steps that generates rhythmic patterns by evenly distributing a selectable number of triggers around the arc of a circle. The concept of Euclidean rhythms was first written about in Godfried Toussaint''s 2005 paper titled "The Euclidean Algorithm Generates Traditional Musical Rhythms." Luckily for us, we don''t need to worry about the details of the algorithm to know that he''s right! Turn some knobs and listen for yourself. This module is fantastic at creating interesting rhythmic patterns, especially when both sequencers are used "against" each other to trigger percussive sounds.&nbsp;The Euclidean Duel also features extensive CV mod inputs that can be used to alter the traditional rhythms for real-time pseudo-random music creation.</p><h2><strong>Sequencer Section</strong></h2><p>The three main controls that dictate what pattern will be created are the number of steps in the sequence, the number of triggers in the sequence, and which step the pattern starts from. These can be adjusted using the <em>Length</em>, <em>Triggers</em>, and <em>Shift</em> knobs respectively. The two sequencer sections of the module have identical controls so let’s just look at sequencer A (the blue section).<br></p>'
  -
    type: image
    image:
      - /assets/modules/ug_euclidean-duel-image-seq.jpg
    alignment: left
  -
    type: text
    text: '<p><strong>Shift</strong>- This dial shifts the pattern clock-wise or counter-clock-wise, in one step increments, to change which step the pattern starts from. This setting can be modulated with its respective <em>CV Mod </em>input jack and bipolar attenuator.</p><p><strong>Triggers</strong>- Sets the number of triggers, or “hits," in the pattern. As triggers are added or subtracted, their placement will change so that they are always spaced as evenly as possible around the circle. This setting can be modulated with its respective <em>CV Mod </em>input jack and bipolar attenuator.</p><ul><li>Note that this setting is relative to the length of the sequence and will therefore change as the <em>Length</em> setting is adjusted. For example, with the dial at its center position (or half-way point) the number of triggers will be eight when the length is set to sixteen and four when the length is eight.</li></ul><p><strong>Length</strong>- Sets the number of steps in the sequence from two to sixteen. This can be modulated with its respective <em>CV Mod </em>input jack and bipolar attenuator and is visually represented by the number of LEDs around the <em>Shift</em> knob.</p><h2><strong>Trigger Output Section</strong></h2>'
  -
    type: image
    image:
      - /assets/modules/ug_euclidean-duel-trig.jpg
    alignment: left
  -
    type: text
    text: '<p><strong>On jack</strong>- Outputs a 5V pulse for each step of the sequence that has a trigger. This is the main trigger output for the Euclidean pattern and is typically patched to a module with a trigger input such as the Transistor drum modules or a Perc EG. If you want to trigger longer notes with a standard envelope, the trigger output can be converted to a gate signal using the Trigger To Gate Converter module.</p><p><strong>Off jack</strong>- Outputs a 5V pulse for each step of the sequence that does not have a trigger. This can be used to trigger a sound on every step that is not part of the Euclidean pattern.</p><p><strong>Flip</strong>- Swaps the two outputs. The circle of LEDs around the <em>Shift</em> dial visually shows the pattern invert when the button is engaged.</p><h2><strong>Transport and Clock Section</strong></h2>'
  -
    type: image
    image:
      - /assets/modules/ug_euclidean-duel-image-clock.jpg
    alignment: left
  -
    type: text
    text: '<p><strong>Stop button and jack</strong>- Clicking the stop button or sending the <em>Stop</em> jack a 5V pulse will stop both sequencers. When using Voltage Modular as a plugin instrument, connecting this to the <em>Stop</em> jack in the Transport section of the I/O panel will stop the sequencer each time your DAW is stopped.</p><p><strong>Start button and jack</strong>- Clicking the start button or sending the <em>Start</em> jack a 5V pulse will start both sequencers. When using Voltage Modular as a plugin instrument, connecting this to the <em>Play</em> jack in the Transport section of the I/O panel will start the sequencer each time you press play in your DAW.</p><p><strong>Reset button and jack</strong>- Clicking the reset button or sending the <em>Reset</em> jack a 5V pulse will immediately force both sequencers back to step one. If you are syncing the Euclidean Duel to an external clock source, it’s important to pulse this jack at the same time the sequence is started if you want the pattern to consistently start from step one.</p><p><strong>External Clock button and jack</strong>- The <em>Ext Clk</em> jack can be used to sync the Euclidean Duel to other modules such as an Eight-Step Sequencer or Sync Divider. When the <em>Ext</em> button is engaged, any trigger or gate CV greater than +2.5 volts received at the <em>Ext Clk</em> jack will advance the sequencer to its next step.</p><p><strong>Rate</strong>- Sets the speed of the sequence from 3.8 to 450 BPM when using the internal clock.</p><p><strong>Clock B Mode</strong>- Switches between three different clock modes for sequencer B (the orange section).</p><ul><li><em>From A</em>- This is the default mode where sequencer B uses the same clock as sequencer A.</li><li><em>Ext B In</em>- Sequencer B is synced to an external clock source received at the <em>B Ext Clk</em> jack.</li><li>A<em> Trig Slave</em>- Sequencer B advances each time there is a trigger in sequence A.&nbsp;</li></ul><p><strong>B External Clock In jack</strong>- This is the clock input jack for syncing sequence B to its own external clock source. When <em>Clock B Mode</em> is set to <em>Ext B In</em>, any trigger or gate CV greater than +2.5 volts received at this jack will advance sequencer B to its next step.</p><p><strong>Clock Out jack</strong>- The internal or external clock signal that is controlling sequencer A is passed to this output so that other modules can be synced to the Euclidean Duel.</p><p><br></p><p>The image below shows a traditional setup for syncing the Euclidean Duel to a DAW.</p>'
  -
    type: image
    image:
      - /assets/modules/ug_euclidean-duel-image-sync.jpg
    alignment: left
template: modules
seo:
  description: 'The Euclidean Duel is a dual trigger sequencer based on the Euclidean geometric principle, where a selectable number of triggers are evenly distributed around the arc of a circle. It''s fantastic at creating unique rhythmic patterns, especially when both sequencers are used "against" each other to trigger percussive sounds. Euclidean Duel features extensive CV mod inputs for real-time pseudo-random music creation.'
  image: /assets/social-modules/euclidean-duel.png
id: 3f460713-1352-43bb-8919-baed7d139bbd
slug: euclidean-duel
blueprint: modules
