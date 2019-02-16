#!/bin/bash

FORMAT=md

touch resume.${FORMAT} && \
rm resume.${FORMAT} && \
cp templates/${FORMAT}.template node_modules/resume-to-markdown/layout.template && \
./convert.js && \
mv resume.output resume.${FORMAT}
