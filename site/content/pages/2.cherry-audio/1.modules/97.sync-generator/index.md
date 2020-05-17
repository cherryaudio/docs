title: 'Sync Generator'
body:
  -
    type: text
    text: '<h1>SYNC GENERATOR</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_sync-generator.jpg
    alignment: left
  -
    type: text
    text: '<p>The Sync Generator module generates 96-pulse-per-quarter-note (PPQN) sync signals with adjustable rate, tap tempo, and CV control of tempo. When using Voltage Modular as a stand-alone instrument, this module can be used to create a master sync-signal at a specified BPM. The <em>Sync Out</em> jack will typically be patched to the <em>Sync In</em> jack of a Sync Divider module which “slows” the super-fast sync signal down to a note-value clock signal that can be used to advance sequencers and switches, reset LFOs, trigger sample-and-hold modules etc. &nbsp;</p><p>While this module can be used as a rock-solid sync generator to keep everything perfectly in time, the <em>Tap Tempo</em> button allows the BPM to be changed “on the fly” and the <em>Rate CV</em> jack can be used in creative ways to introduce variation into the sync signal if desirable.<br></p><h2><strong>Inputs, Outputs and Controls</strong></h2><p><strong>Reset jack</strong>- A 5V pulse or gate received at this jack will immediately force-reset the sync signal. It''s important to reset the Sync Generator at the same time as other modules so that everything starts at the same instant. Typically this will be connected to the <em>Play Trig</em> jack of the "master" sequencer whose play and stop buttons are being used.</p><p><strong>Rate CV jack and attenuator</strong>- CV input and attenuator for externally controlling the rate of the sync signal.</p><p><strong>Rate</strong>- Sets the tempo of the sync signal from 1 to 450 BPM (beats-per-minute).</p><p><strong>Tap Tempo</strong>- Allows the rate to be set by “tapping” the tempo manually. The tempo is set based on the time between two consecutive clicks of the button.</p><p><strong>Sync Out jack</strong>- Outputs a 96-pulse-per-quarter-note (PPQN) sync signal. Typically this is patched to the <em>Sync In</em> jack of one or more Sync Dividers to create clock signals for advancing sequencers, switches etc.</p>'
template: documentation
seo:
  description: 'The Sync Generator module generates 96-pulse-per-quarter-note (PPQN) sync signals with adjustable rate, tap tempo, and CV control of tempo.'
  image: /assets/social-modules/sync-generator.png
fieldset: documentation
id: 6e8fe157-d506-4095-a4cd-f6ca50008b43
