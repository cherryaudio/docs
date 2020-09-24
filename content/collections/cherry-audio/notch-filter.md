---
title: 'Notch Filter'
body:
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - notchFilter.png
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The Cherry Audio Notch Filter is a variable-bandwidth audio filter for removing frequencies in a CV-controllable notch. This module can be used "surgically" to target and remove unwanted frequencies from an audio signal or can be used more creatively to create phaser-type effects by modulating the filter’s frequency.'
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
        text: 'Inputs, Outputs, and Controls'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Input jack'
      -
        type: text
        text: '- Patch audio signals here.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'CV Mod jack and attenuator'
      -
        type: text
        text: '- CV input jack and attenuator for externally controlling the '
      -
        type: text
        marks:
          -
            type: italic
        text: Frequency.
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: Frequency
      -
        type: text
        text: '- Sets the frequency where the filter’s notch will be. Audio content at and around this frequency will be removed from the input signal.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Bypass button'
      -
        type: text
        text: '- When lit red, the notch filter is active. When gray, the filter is bypassed. Notch filters are often used to make subtle adjustments. Toggling this button on and off can help identify which frequencies are being removed by the filter.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: Bandwidth
      -
        type: text
        text: '- Adjusts the width of the notch. Low values create a narrow notch while higher values create a wider notch.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Output jack'
      -
        type: text
        text: '- Outputs the filtered audio signal.'
template: modules
seo:
  description: 'The Cherry Audio Notch Filter is a variable-bandwidth audio filter for removing frequencies in a CV-controllable notch.'
  image: /assets/social-modules/notch-filter.png
slug: notch-filter
blueprint: modules
categories: filters
updated_at: 1593214881
updated_by: a0ce54e0-bf71-4d4c-a5b9-7182705c1bfa
id: 6ef12632-9f65-4af2-85de-d326082a9fd5
---
