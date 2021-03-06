---
title: 'Vintage Resonator'
body:
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - '-vintage-resonator_sm.jpg'
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The Vintage Resonator module was inspired by the '
      -
        type: text
        marks:
          -
            type: italic
        text: Resonators
      -
        type: text
        text: " section of the vintage 70s Moog Polymoog. The \"resonators,\" aka, filters are globally switchable to operate in highpass, bandpass, or lowpass modes, and they're fantastic at imparting an organic feel to otherwise blah patches. If you've ever heard \"The Model\" by Kraftwerk, almost every sound in the track makes use of the Polymoog's resonators section.\_"
  -
    type: paragraph
    content:
      -
        type: text
        text: 'By most accounts, the original Polymoog version has two major shortcomings: the filter slopes are a little too shallow to create really dramatic resonance effects, and the filter cutoff frequencies aren''t CV controllable. We''ve addressed both of these issues with a 12/24 db slope selector, as well as bipolar CV inputs for each filter''s cutoff frequency (which allow killer phaser-ish swept sounds). Best of all, Vintage Resonator costs a fraction of the original, and we excluded the endearing Polymoogs-are-ALWAYS-broken "feature."'
  -
    type: heading
    attrs:
      level: '2'
    content:
      -
        type: text
        text: 'How It Works'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'In the original instrument, Moog got a little fanciful with their use of the word "resonators." In actuality it consists of three state-variable filters in a parallel configuration. In other words, the signal doesn''t flow into each filter, one after the other - the signal is split, runs into all three filters and their collective outputs are mixed together. This means that settings on each section won''t interact with settings on another, resulting in three separate filter tonalities sounding simultaneously (dependent on '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Gain '
      -
        type: text
        text: 'settings). Cranking up the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Emph '
      -
        type: text
        text: "controls (aka, resonance) for each band can create three individual \"peaks\" or resonances, hence the \"resonator\" name.\_"
  -
    type: paragraph
    content:
      -
        type: text
        text: 'One unique aspect of the original Polymoog resonator filters is that each is band-limited. Most synthesizer filters are configured such that the cutoff frequency covers the entire audible sound spectrum (20-20,000 Hz, give or take), whereas the Polymoog resonator filters are set up more like a parametric EQ where each filter covers a section of the audio spectrum, i.e. low, mid, and high as follows:'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Low: 60 - 300 Hz'
      -
        type: hard_break
      -
        type: text
        text: 'Med: 300 - 1500 Hz'
      -
        type: hard_break
      -
        type: text
        text: 'High: 1500 - 7500 Hz'
      -
        type: hard_break
      -
        type: hard_break
      -
        type: text
        text: '(The Polymoog panel labels the mid frequencies as "Med," because, y''know, "medium frequencies.")'
  -
    type: heading
    attrs:
      level: '2'
    content:
      -
        type: text
        text: 'Pass Mode'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Vintage Resonator has a three-position '
      -
        type: text
        marks:
          -
            type: italic
        text: "Pass Mode\_"
      -
        type: text
        text: 'switch that globally selects the behavior of all three filters. If you''re not up on your audio filter nerdery, here''s an overview of how each mode works:'
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - screenshots/ug_filter_lp.jpg
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'A lowpass filter allows frequencies '
      -
        type: text
        marks:
          -
            type: italic
        text: below
      -
        type: text
        text: "\_the cutoff frequency setting to pass through, but blocks frequencies "
      -
        type: text
        marks:
          -
            type: italic
        text: above
      -
        type: text
        text: "\_the cutoff frequency. The frequency plot above shows the effect of a lowpass filter with its cutoff set at 412 Hz on a sawtooth wave (the vertical axis represents amplitude and the horizontal axis represents frequency). Notice how the high-frequency content trails off at the high end of the audio spectrum."
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - screenshots/ug_filter_hp.jpg
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The plot above shows the same oscillator signal and cutoff frequency setting using highpass mode. This is the opposite of lowpass mode: high-frequency content remains, but low frequencies are removed as the cutoff frequency increases.'
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - screenshots/ug_filter_bp.jpg
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The plot above shows the same oscillator signal and cutoff frequency setting using the bandpass mode. Bandpass mode combines '
      -
        type: text
        marks:
          -
            type: italic
        text: both
      -
        type: text
        text: "\_lowpass and highpass modes, leaving sound only \"in the middle.\" The cutoff frequency lies roughly halfway between the falloff slope on each side.\_"
  -
    type: heading
    attrs:
      level: '2'
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Inputs, Outputs and Controls'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'L/M In and R In jacks'
      -
        type: text
        text: '- These are the mono and stereo audio inputs. Though it only has one set of controls, Vintage Resonator actually has two complete and independent signal paths "under the hood" for true stereo processing. For mono use, simply use the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'L/M In'
      -
        type: text
        text: " jack.\_"
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'L Out and R Out jacks'
      -
        type: text
        text: '- Stereo output jacks. For mono processing, use the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'L Out '
      -
        type: text
        text: 'jack. (and don''t call me Jack)'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'CF (Cutoff Frequency)'
      -
        type: text
        text: '- Sets the frequency where attenuation begins. Attenuation will be above or below this frequency (or both) depending on the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Pass Mode '
      -
        type: text
        text: "switch setting.\_"
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Emph (Resonance)'
      -
        type: text
        text: "- Emphasizes sound energy at and around the current cutoff frequency by adding feedback from the filter's output back to its input. At lower settings, this can be used to create mild resonances such as those heard in acoustic instruments. At more extreme settings, resonance can create a pure sine wave at its own frequency (variable via the\_"
      -
        type: text
        marks:
          -
            type: italic
        text: CF
      -
        type: text
        text: "\_slider). Be careful with the "
      -
        type: text
        marks:
          -
            type: italic
        text: 'Emph '
      -
        type: text
        text: 'sliders as they can get loud at extreme settings. Note that this "ringing" resonant frequency will be much more prominent with the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Slope '
      -
        type: text
        text: 'switch in the '
      -
        type: text
        marks:
          -
            type: italic
        text: 24db
      -
        type: text
        text: "\_position.\_"
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: Gain
      -
        type: text
        text: "- This acts as a volume control for each resonator section. Resonator sections can be muted by setting their\_"
      -
        type: text
        marks:
          -
            type: italic
        text: 'Gain '
      -
        type: text
        text: "control to 0%.\_"
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: Slope
      -
        type: text
        text: '- The nature of how a filter works is such that its affect on frequencies "falls off" above or below the cutoff frequency (see the '
      -
        type: text
        marks:
          -
            type: italic
        text: "Pass Mode\_"
      -
        type: text
        text: 'section above). Slope adjusts the steepness of this falloff, hence the "slope" terminology. A 12db per/octave filter has a shallower slope, giving it a clearer and brighter character, whereas a 24db per/octave filter''s steeper slope gives it a tighter and darker tone (as well as a far more pronounced ringing sound when the '
      -
        type: text
        marks:
          -
            type: italic
        text: Emph
      -
        type: text
        text: "\_slider is turned up)."
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: "Freq\_CV mod input/attenuators"
      -
        type: text
        text: "- Adjusts the depth of the cutoff frequency modulation, i.e. how much the filters sweep back and forth when a CV signal is applied. The\_"
      -
        type: text
        marks:
          -
            type: italic
        text: "Freq CV\_"
      -
        type: text
        text: "mod input and attenuator allow negative or positive CV control of cutoff frequency. The center setting correlates to no modulation.\_\_"
      -
        type: hard_break
      -
        type: hard_break
      -
        type: text
        text: "When used in conjunction with one or more LFOs, the CV mod inputs are especially effective for creating all manner of phaser-esque sweeping madness.\_"
template: modules
seo:
  description: 'The Cherry Audio Chorus module is a great sounding and flexible stereo chorus effect featuring CV control of delay time, feedback level, and wet/dry mix.'
  image: /assets/social-modules/chorus.png
slug: vintage-resonator
blueprint: modules
categories: filters
updated_at: 1596838287
updated_by: a0ce54e0-bf71-4d4c-a5b9-7182705c1bfa
id: af1c9274-8448-4f0a-8e64-467b18fe814d
---
