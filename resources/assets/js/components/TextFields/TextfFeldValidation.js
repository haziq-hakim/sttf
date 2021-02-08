
import React, { Component} from "react";
import { withStyles } from '@material-ui/core/styles';
import TextField from '@material-ui/core/TextField';
import { render } from '../../../../../public/js/app';

const useStyles = theme => ({
  root: {
    '& > *': {
      margin: theme.spacing(1),
      width: '25ch',
    },
  },
});




class TextFieldValidation extends Component {
  constructor(props) {
    super(props);
    this.state = { 
      errorText: '', 
      value: props.value }
  }

  
    render(){
      const {classes} = this.props;

  return (
    <div>
      <TextField 
      onChange={this.props.textAreaHandler.bind(this, this.props.stat)}
     
                 value={this.props.value} 
                 dr ={this.props.rules}
                 name={this.props.id}  
                 id={this.props.id} 
                 label= {this.props.label}  
                 fullWidth={this.props.fullwidth}
                 multiline ={this.props.multiline}
                 rows= {this.props.rows}
                 helperText={this.props.stat.errorMsg?this.props.stat.errorMsg:''}
                 error ={this.props.stat.errorMsg? true: false }
                 variant="outlined" />
      </div>
    
  );
}
}
  


export default withStyles(useStyles)(TextFieldValidation)