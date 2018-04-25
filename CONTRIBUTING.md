# Contributing

## Coding Guidelines

- When referencing colours, use mappings or global.scss (no hex or custom values)
- All padding/margin should use the $base-unit values
- Mobile first approach
- BEM has been correctly implemented (e.g one '\__')
- Browser specific classes are grouped in the footer of the SASS files
- Block elements (`#{$block}`) should be referenced once per file and all sub rules contained inside
- Use `<picture>` elements over `<img>` elements for responsive support
- Use `<` and `>=`, exclusively.

## Bad CSS
```
.block {
  $block: '.block';

  &__element {
    border: 1px solid $silver;
    margin-bottom: 12px;
    background: white;

    #{$block}--nested & {
        background: $wolfsburg-green;
    }

    .lt-ie10 {
      display: block;
    }
  }

  &--modifier, &--modifier-two {
    color: $#979797;
    @include media('<=tablet') {
      color: $charcoal-grey;
    }
  }

  h2 {
      font-weight: 600;
  }
}
```

## Good CSS
```
.block {
  $block: &;

  &__element {
    border: 1px solid $color-border-primary;
    margin-bottom: $half-unit;
    background-color: $white;

    #{$block}--nested & {
        background-color: $color-confirmation-light;
    }
  }

  &--modifier,
  &--modifier-two {
    color: $color-text;

    @include media('>=mobile') {
      color: $color-text-link-alt;
    }
  }

  &__heading {
      @include opensans-semibold();
  }
}

.lt-ie10 {
  .block__element {
    display: block;
  }
}
```
