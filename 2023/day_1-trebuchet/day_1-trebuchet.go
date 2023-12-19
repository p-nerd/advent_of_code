package main

import (
	"log"
	"os"
	"strings"
)

func main() {
	c, err := os.ReadFile("input.txt")
	if err != nil {
		log.Fatal(err)
	}
	file := strings.Trim(string(c), "")
	lines := strings.Split(file, "\n")

	sum := 0

	for _, line := range lines {
		fd := '0'
		for _, c := range line {
			if '0' <= c && c <= '9' {
				fd = c
			}
		}
		ld := '0'
		for _, c := range line {
			if '0' <= c && c <= '9' {
				fd = c
			}
		}
	}
}
